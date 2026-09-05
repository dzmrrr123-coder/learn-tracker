<?php
// Learn Tracker Configuration & Core Helpers

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'learn-tracker');

// Connect database
function db_connect() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Database connection failed: " . htmlspecialchars($conn->connect_error));
    }
    $conn->set_charset("utf8mb4");
    return $conn;
}

// Helper: redirect
function redirect($url) {
    header("Location: $url");
    exit();
}

// Helper: sanitize input
function clean($data) {
    if ($data === null) return '';
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Level calculation: level = floor(sqrt(xp / 100)) + 1
function calculate_level($xp) {
    $xp = max(0, (int)$xp);
    return (int)(floor(sqrt($xp / 100)) + 1);
}

// Base XP for a given level
function level_base_xp($level) {
    $level = max(1, (int)$level);
    return ($level - 1) * ($level - 1) * 100;
}

// XP needed to reach next level
function xp_to_next_level($xp) {
    $current_level = calculate_level($xp);
    return ($current_level * $current_level * 100);
}

// Level progress percentage (0 - 100%)
function level_progress_percent($xp) {
    $xp = max(0, (int)$xp);
    $level = calculate_level($xp);
    $base = level_base_xp($level);
    $next = xp_to_next_level($xp);
    $range = $next - $base;
    if ($range <= 0) return 100;
    $progress = $xp - $base;
    return min(100, max(0, round(($progress / $range) * 100)));
}

// Gamification Rank title based on level
function get_user_rank($level) {
    $ranks = [
        1 => 'Terminal Cadet',
        2 => 'Junior Scripter',
        3 => 'Git Wrangler',
        4 => 'Backend Craftsman',
        5 => 'Docker Apprentice',
        6 => 'Container Captain',
        7 => 'Cloud Pioneer',
        8 => 'DevOps Specialist',
        9 => 'CI/CD Architect',
        10 => 'Site Reliability Engineer',
        11 => 'Cloud Guru',
        12 => 'DevOps Legend'
    ];
    return $ranks[min(12, max(1, (int)$level))] ?? 'DevOps Grandmaster';
}

// Check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

// Require login
function require_login() {
    if (!is_logged_in()) {
        set_flash('warning', 'Silakan login terlebih dahulu untuk melanjutkan.');
        redirect('login.php');
    }
}

// Daily streak updater
function update_user_streak($conn, $user_id) {
    $today = date('Y-m-d');
    $yesterday = date('Y-m-d', strtotime('-1 day'));

    $stmt = $conn->prepare("SELECT streak, last_active_date FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if (!$res) return 0;

    $last_active = $res['last_active_date'];
    $streak = (int)$res['streak'];

    if ($last_active === $today) {
        return $streak;
    } elseif ($last_active === $yesterday) {
        $streak++;
    } else {
        $streak = 1;
    }

    $stmt = $conn->prepare("UPDATE users SET streak = ?, last_active_date = ? WHERE id = ?");
    $stmt->bind_param("isi", $streak, $today, $user_id);
    $stmt->execute();
    $stmt->close();

    return $streak;
}

// Flash messages
function set_flash($type, $message) {
    $_SESSION['flash'] = [
        'type' => $type, // success, danger, warning, info
        'message' => $message
    ];
}

function get_flash() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// CSRF tokens
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_field() {
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars(csrf_token()) . '">';
}

function verify_csrf() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $token = $_POST['csrf_token'] ?? '';
        if (empty($token) || !hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
            http_response_code(403);
            die("Error 403: Invalid CSRF Token request.");
        }
    }
}
