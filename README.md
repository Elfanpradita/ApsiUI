# 📚 Gramedia Admin Panel

Proyek ini adalah dashboard admin modern untuk manajemen data buku di Gramedia, dibuat dengan Laravel 12 dan Filament v3.

## 🚀 Fitur Utama

- 🔐 Autentikasi dan manajemen pengguna
- 📘 Manajemen data **Buku Baru**
- 📊 Menu **Laporan**:
  - Grafik Buku Baru
  - Tabel Buku Baru
- 🎨 Desain gelap modern & responsif
- ⚙️ Role & Permission support via Filament Shield
- 📈 Log aktivitas (dapat disembunyikan sesuai kebutuhan)

## 🛠️ Teknologi

- Laravel 12
- Filament v3
- Filament Shield (Role & Permission)
- Filament Logger (Log Aktivitas)
- TailwindCSS
- Overlook Widget

## 🧪 Cara Menjalankan

```bash
git clone https://github.com/namauser/gramedia-admin.git
cd apsi
composer install
chown -R www-data:www-data storage/*
chmod 777 -R storage/*
chmod 777 bootstrap/*
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan project:init
