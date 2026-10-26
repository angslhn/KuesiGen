# KuesiGen

Proyek KuesiGen berbasis **Laravel 13** + **Vite** + **Tailwind CSS v4**.

## Stack

- PHP 8.3+, Laravel 13.x
- Vite 8, Tailwind CSS v4, laravel-vite-plugin
- SQLite (database/database.sqlite)
- Font: Instrument Sans (via Bunny Fonts)

## Quick Start

```bash
# Install dependencies (sudah dilakukan)
composer install
npm install

# Generate app key (jika belum)
php artisan key:generate

# Jalankan dev server (PHP + Vite HMR)
composer dev
# atau manual:
# php artisan serve
# npm run dev
```

Akses: `http://localhost:8000`

## Build Production

```bash
npm run build
composer install --optimize-autoloader --no-dev
```

## Struktur Penting

```
routes/web.php          # Route utama: GET / → view('welcome')
resources/views/welcome.blade.php  # Landing page (SVG animasi + Tailwind)
resources/css/app.css   # Tailwind v4 + theme config
vite.config.js          # Vite + laravel-vite-plugin + tailwindcss
database/database.sqlite  # SQLite DB (sudah termigrasi)
```

## Perintah Berguna

```bash
php artisan migrate      # Jalankan migrasi
php artisan test         # Jalankan test (PHPUnit)
npm run build            # Build aset production (public/build/)
php artisan key:generate # Generate APP_KEY
```

## Catatan

- `APP_KEY` di `.env` kosong → jalankan `php artisan key:generate`
- Auth scaffolding **belum** dipasang (login/register tidak tersedia)
- `public/build/` dibuat setelah `npm run build`
