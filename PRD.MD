PRD — Learn Tracker
Redesign UI/UX Enterprise & Optimasi Fitur
1. Ringkasan Produk
Learn Tracker adalah platform pembelajaran terstruktur berbasis roadmap, quest, XP, streak, Pomodoro, resource, dan error log.

Versi saat ini terlalu terasa seperti dashboard AI-generated karena:

Terlalu banyak gradient, glow, badge, dan ikon.
Tema dark cyber tidak sesuai dengan tujuan belajar yang tenang.
Informasi terlalu padat dalam bentuk kartu.
Gamifikasi lebih dominan daripada progres belajar.
Hierarki visual dan prioritas aksi belum jelas.
Belum ada ruang refleksi dan pertanyaan belajar yang terstruktur.
Redesign diarahkan menjadi aplikasi learning management personal yang minimalis, tenang, clean, dan terasa profesional seperti produk enterprise.

2. Tujuan Utama
Mengurangi kesan “AI slop” dan tampilan dekoratif berlebihan.
Membuat pengguna langsung memahami:

Apa yang harus dikerjakan hari ini.
Progres minggu ini.
Apa langkah berikutnya.
Meningkatkan konsistensi belajar tanpa membuat pengguna merasa tertekan.
Menjadikan gamifikasi sebagai pendukung, bukan fokus utama.
Menambahkan fitur Question untuk mencatat pertanyaan belajar dan menghubungkannya dengan quest.
Meningkatkan aksesibilitas, responsivitas, dan usability standar enterprise.
3. Design Direction
Arah Visual
Calm productivity workspace

Karakter desain:

Minimalis
Clean
Profesional
Hangat
Fokus pada konten
Tidak terlalu “game-like”
Tidak memakai efek visual yang tidak memiliki fungsi
Palet Warna
Gunakan maksimal 5 warna utama:

Background: 
#F8F7F3 — warm off-white
Surface: 
#FFFFFF
Text utama: 
#202522
Text sekunder: 
#69716B
Brand accent: 
#52796F — muted sage green
Status positif: 
#7A9E7E
Hindari:

Gradient ungu
Neon cyan
Glow effect
Background gelap penuh
Banyak warna status dalam satu layar
Tipografi
Font utama: Inter atau Plus Jakarta Sans
Font mono hanya untuk kode, command, dan error teknis
Heading menggunakan ukuran dan weight yang konsisten
Body text minimal 14–16px
Line-height 1.5–1.6
Komponen Visual
Border tipis
Shadow sangat ringan
Radius 8–12px
Tidak menggunakan glassmorphism
Tidak menggunakan dekorasi berbentuk blob atau orb
Ikon hanya digunakan jika membantu pemahaman
4. Target User
Primary User
Pelajar atau developer pemula yang ingin belajar:

MySQL
PHP
OOP
Laravel
Docker
AWS
DevOps
User Need
Pengguna membutuhkan:

Roadmap yang jelas
Tugas harian yang realistis
Progress yang mudah dipahami
Tempat mencatat error
Tempat menyimpan pertanyaan
Motivasi ringan
Review mingguan
5. Information Architecture
Navigasi utama:

Overview
Roadmap
Today
Resources
Questions
Notes & Errors
Focus Timer
Navigasi tidak perlu menampilkan terlalu banyak statistik di header.

Header
Header baru berisi:

Logo Learn Tracker
Breadcrumb atau judul halaman
Navigasi utama
Streak kecil
Avatar/profile menu
XP dan level tidak perlu selalu ditampilkan sebagai pill besar. Informasi tersebut cukup berada di halaman Overview atau profile menu.

6. Halaman Overview
Tujuan
Memberikan ringkasan progres dan membantu pengguna menentukan aksi berikutnya.

Struktur
A. Greeting Section
Contoh:

Selamat pagi, Dimas
Fokus hari ini: menyelesaikan relasi tabel database.

Di bawahnya:

Minggu berjalan
Progress minggu ini
Sisa task hari ini
B. Primary Action Card
Card utama harus berisi satu fokus:

Lanjutkan belajar
Hari 3 — Insert dan SELECT data produk
Estimasi: 30 menit

CTA:

Mulai Quest
Lihat Detail
Hanya ada satu primary CTA di area utama.

C. Progress Summary
Tampilkan 3 metrik penting:

Quest selesai minggu ini
Total waktu belajar
Streak saat ini
Jangan menampilkan terlalu banyak angka dekoratif.

D. Weekly Progress
Progress bar atau timeline sederhana:

Senin
Selasa
Rabu
Kamis
Jumat
Sabtu
Minggu
Status:

Selesai
Hari ini
Belum dimulai
E. Recent Activity
Aktivitas terakhir:

Quest selesai
Error dicatat
Question dibuat
Sesi Pomodoro selesai
7. Halaman Today
Halaman ini menjadi pusat aktivitas harian.

Konten
Daily Focus
Judul quest
Tujuan pembelajaran
Estimasi waktu
Tingkat kesulitan
XP reward kecil
Checklist
Setiap task memiliki:

Checkbox
Deskripsi singkat
Link resource terkait
Tombol Tandai selesai
Tombol Tambah catatan
Tombol Buat pertanyaan
Reflection
Setelah task selesai, tampilkan pertanyaan refleksi:

Apa yang baru saya pahami?
Bagian mana yang masih membingungkan?
Apa yang ingin saya coba berikutnya?
Reflection bersifat opsional agar tidak menambah beban.

8. Halaman Roadmap
Roadmap harus menggantikan tampilan quest yang terlalu game-like.

Struktur
Header roadmap
Progress keseluruhan
Daftar 12 minggu
Setiap minggu memiliki:

Tema
Target
Status
Jumlah quest
Progress bar
Expand/collapse
Contoh:

Minggu 1
MySQL Dasar
Membangun database toko online
3 dari 7 quest selesai
[ Lihat minggu ]
Status Minggu
Completed
In progress
Upcoming
Locked hanya jika memang diperlukan
Jangan memakai label seperti “Final Boss” atau visual game berlebihan. Bahasa tetap boleh menyenangkan, tetapi harus profesional.

9. Fitur Question
Tujuan
Membantu pengguna menyimpan pertanyaan yang muncul saat belajar agar tidak mengganggu flow belajar.

Cara Membuat Question
Question dapat dibuat dari:

Halaman Today
Detail quest
Halaman Questions
Setelah menyelesaikan task
Field
Pertanyaan
Quest terkait
Topik
Prioritas
Status
Catatan tambahan
Referensi atau link
Status
Open
In review
Answered
Archived
Prioritas
Low
Medium
High
Halaman Questions
Tampilkan:

Search question
Filter status
Filter topic
Filter quest
Sort terbaru atau prioritas
Empty state yang membantu
Contoh empty state:

Belum ada pertanyaan.
Catat hal yang belum jelas agar bisa kamu review nanti.

Detail Question
Pengguna dapat:

Mengedit pertanyaan
Menambahkan jawaban pribadi
Menambahkan resource
Mengubah status
Menghubungkan ke quest
Mengarsipkan pertanyaan
Acceptance Criteria
Question dapat dibuat tanpa meninggalkan halaman Today.
Question otomatis menyimpan user ID.
Question dapat difilter berdasarkan status.
Question dapat diubah menjadi Answered.
Question terkait dengan quest atau minggu tertentu.
Pertanyaan tidak hilang ketika halaman di-refresh.
10. Notes & Errors
Fitur Error Log sebaiknya diperluas menjadi Notes & Errors.

Jenis Catatan
Error
Insight
Command
Decision
Reflection
Form
Judul
Tipe catatan
Isi masalah
Solusi
Resource
Quest terkait
Tags
UX
Jangan mempromosikan error sebagai sesuatu yang menakutkan. Gunakan copy:

Error adalah bagian dari proses belajar. Simpan solusi agar bisa kamu gunakan kembali.

11. Pomodoro
Tujuan
Membantu pengguna fokus, bukan menjadi fitur dekoratif.

Fitur
Preset 25/5
Preset 50/10
Custom duration
Hubungkan sesi dengan quest
Pause/resume
Selesaikan sesi
Riwayat waktu belajar
Setelah Timer Selesai
Tampilkan pilihan:

Tandai task selesai
Tambah reflection
Buat question
Mulai break
12. Gamification yang Lebih Sehat
Gamifikasi tetap dipertahankan tetapi dibuat lebih subtle.

XP
XP ditampilkan setelah:

Menyelesaikan quest
Menyelesaikan sesi belajar
Menjawab atau mereview question
Mencatat solusi error
Streak
Streak hanya ditampilkan sebagai motivasi kecil.

Contoh:

5 hari konsisten belajar

Hindari animasi berlebihan, confetti, dan popup yang terlalu sering.

Reward
Reward mingguan dapat berupa:

Pesan apresiasi
Rekomendasi break
Badge sederhana
Progress milestone
13. UX Writing
Gunakan bahasa yang:

Sederhana
Positif
Tidak menghakimi
Tidak terlalu berlebihan
Konsisten
Ganti Copy
Saat Ini	Usulan
DevOps Preparation HQ	Learning Overview
Quest Board	Roadmap
Daily Streak	Konsistensi belajar
Catat Error (+5 XP)	Catat pembelajaran
Final Boss	Target minggu ini
Naik level	Progress level
Mulai Fokus	Mulai sesi belajar
14. Responsive Design
Desktop
Sidebar atau top navigation
Main content maksimal 1200px
Dua kolom untuk overview
Detail task dan resource dapat berdampingan
Tablet
Satu kolom utama
Statistik dikurangi menjadi horizontal scroll atau grid 2 kolom
Mobile
Bottom navigation untuk 4 menu utama:

Today
Roadmap
Questions
Profile
Primary CTA fixed atau mudah dijangkau
Table diganti card/list
Jangan memaksa user melakukan horizontal scrolling
15. Accessibility
Kontras warna minimal WCAG AA
Semua tombol memiliki label jelas
Jangan menggunakan warna sebagai satu-satunya penanda status
Focus state terlihat
Navigasi mendukung keyboard
Checkbox dan form memiliki label
Error message muncul dekat dengan field terkait
Ukuran touch target minimal 44px
Animasi dapat dikurangi melalui prefers-reduced-motion
16. Data Model Baru
Tambahkan tabel questions:

questions
- id
- user_id
- quest_id nullable
- title
- description
- topic nullable
- status
- priority
- answer nullable
- reference_link nullable
- created_at
- updated_at
- answered_at nullable
Opsional tambahkan tabel learning_notes:

learning_notes
- id
- user_id
- quest_id nullable
- type
- title
- content
- tags nullable
- created_at
- updated_at
17. Non-Functional Requirements
Semua query menggunakan prepared statement.
Semua data dibatasi berdasarkan user ID.
Form memiliki validasi server-side.
URL resource divalidasi.
Delete menggunakan confirmation.
Feedback sukses/gagal menggunakan inline alert, bukan alert browser.
Loading state tersedia untuk aksi asynchronous.
Empty state tersedia di semua halaman.
Tidak menggunakan localStorage untuk data penting.
Layout harus tetap usable pada koneksi lambat.
18. Prioritas Implementasi
Phase 1 — Visual Foundation
Ganti tema dark cyber menjadi warm light theme.
Kurangi gradient, glow, dan badge.
Rapikan typography.
Buat sistem warna dan spacing konsisten.
Redesign navbar, card, button, form, dan alert.
Phase 2 — Core UX
Buat halaman Today.
Fokuskan dashboard pada next action.
Redesign Roadmap.
Sederhanakan statistik dan gamifikasi.
Tambahkan empty state dan feedback state.
Phase 3 — Question Feature
Tambah database questions.
Tambah create/edit/detail question.
Tambah filter dan status.
Hubungkan question dengan quest.
Tambahkan question dari halaman Today.
Phase 4 — Notes & Pomodoro
Refactor Error Log menjadi Notes & Errors.
Hubungkan Pomodoro ke quest.
Tambahkan reflection setelah sesi belajar.
Tambahkan riwayat waktu belajar.
Phase 5 — Polish & QA
Responsive testing.
Accessibility review.
Form validation review.
Empty/loading/error state review.
Browser testing untuk flow utama.
Performance dan security review.
19. Success Metrics
Redesign dianggap berhasil jika:

Pengguna dapat menemukan task hari ini dalam waktu kurang dari 10 detik.
Pengguna dapat membuat question dalam maksimal 3 langkah.
Pengguna memahami progres minggu tanpa membaca seluruh halaman.
Tidak ada elemen dekoratif yang tidak memiliki fungsi.
Semua halaman nyaman digunakan di desktop dan mobile.
Pengguna dapat menyelesaikan alur berikut tanpa kebingungan:
Login
→ Lihat Today
→ Mulai Quest
→ Selesaikan Task
→ Buat Question
→ Mulai Pomodoro
→ Simpan Reflection
20. Definition of Done
Visual tidak lagi bergantung pada tema cyber, neon, gradient, atau glow.
Semua halaman memiliki hierarchy visual yang jelas.
Overview memiliki satu primary action.
Halaman Today tersedia.
Roadmap dapat dipahami tanpa elemen gamifikasi berlebihan.
Fitur Question berjalan end-to-end.
Data tersimpan aman di database.
Semua form tervalidasi.
Mobile layout usable.
Tidak ada error state yang membingungkan.
UI lolos review accessibility dasar.
Flow utama sudah diuji di browser.