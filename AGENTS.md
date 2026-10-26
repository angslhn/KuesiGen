<laravel-boost-guidelines>
# Aplikasi Laravel

Repositori ini berisi aplikasi Laravel. Jalankan setup berikut sebelum memulai:

## Prasyarat

Pastikan PHP dan Composer tersedia:

```sh
php -v
composer -V
```

Jika tidak ada, install sesuai OS:

**macOS:**
```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.5)"
```

**Windows PowerShell:**
```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.5'))
```

**Linux:**
```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.5)"
```

Restart terminal setelah install.

## Setup Agent

Install Laravel Boost dari root aplikasi:

```sh
composer require laravel/boost --dev
php artisan boost:install
```

Boost akan mengganti panduan ini dengan guidelines khusus aplikasi. Setelah install, baca `AGENTS.md` lagi dan lanjutkan dengan guidelines yang di-generate.
</laravel-boost-guidelines>
