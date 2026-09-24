# PBKK-Agentic-AI — Tugas 4: Aplikasi Multi-View Profil Akademik

Mini-website akademik pribadi (Laravel + Blade + Tailwind CSS via Vite) berisi profil diri, visualisasi rancangan platform Agentic AI kelompok (**AutoQA Agent**), dan formulir pengumpulan ide.

**Pradhipta Raja Mahendra** · Teknik Informatika · Institut Teknologi Sepuluh Nopember (ITS)

## Fitur

- **Master layout tunggal** — `resources/views/layouts/app.blade.php` (title dinamis, navbar, container, footer ITS). Semua halaman memakai `@extends`, tanpa duplikasi HTML.
- **Satu controller** — `PageController` untuk semua rute:
  | Rute | Halaman |
  |---|---|
  | `GET /` dan `/beranda` | Beranda |
  | `GET /profil-mahasiswa` | Profil |
  | `GET /ide-agent` | Ide-Riset + diagram pipeline |
  | `POST /ide-agent` | Kirim formulir ide (redirect dengan pesan sukses) |
- **Komponen Blade** — `<x-info-card>` (data profil) dan `<x-status-banner>` (notifikasi/alert).
- **Tailwind CSS via NPM + Vite** — tanpa tautan CDN.

### Tantangan bonus

1. **Toggle tema dinamis** — `/ide-agent?mode=dark` mengganti class Tailwind lewat variabel Blade `$isDark`.
2. **Alert status interaktif** — `/beranda?user=Andi` menampilkan "Selamat datang, Andi!" lewat `<x-status-banner>`.

## Cara menjalankan

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate      # membuat database SQLite untuk session

npm run dev              # terminal 1
php artisan serve        # terminal 2
```

Buka http://127.0.0.1:8000.
