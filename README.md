<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![Screenshot 2025-01-07 062544](https://github.com/user-attachments/assets/bd3cb68c-f589-41d4-8880-f88311790447)



Berikut langkah-langkah untuk **clone** dan menjalankan proyek Laravel dari GitHub:

### Langkah 1: Clone Repository
1. Buka terminal atau command prompt.
2. Jalankan perintah berikut untuk **clone** repository:
   ```bash
   git clone https://github.com/akmlnajib/Kenangan-RentalCar.git
   ```
3. Masuk ke direktori proyek:
   ```bash
   cd Kenangan-RentalCar
   ```

### Langkah 2: Install Dependencies
1. Jalankan perintah berikut untuk mengunduh semua dependencies menggunakan Composer:
   ```bash
   composer install
   ```

2. Jalankan perintah berikut untuk mengunduh dependencies frontend menggunakan npm atau yarn:
   ```bash
   npm install
   npm run dev
   ```

### Langkah 3: Konfigurasi File Environment
1. Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
2. Buka file `.env` dan sesuaikan konfigurasi seperti database, mail, dan lainnya sesuai kebutuhan.

### Langkah 4: Generate Application Key
```bash
php artisan key:generate
```

### Langkah 5: Buat Database
1. Buat database baru di MySQL atau database lain yang digunakan.
2. Sesuaikan nama database di file `.env`.

### Langkah 6: Jalankan Migrasi dan Seeder
1. Jalankan migrasi untuk membuat tabel:
   ```bash
   php artisan migrate
   ```
2. (Opsional) Jalankan seeder jika ada:
   ```bash
   php artisan db:seed
   ```

### Langkah 7: Jalankan Server
```bash
php artisan serve
```
Akses proyek di `http://localhost:8000`.

### Catatan Tambahan
- Pastikan server sudah terpasang PHP 8+, Composer, Node.js, dan database MySQL.
- Jika menggunakan storage untuk gambar, jalankan:
  ```bash
  php artisan storage:link
  ```
