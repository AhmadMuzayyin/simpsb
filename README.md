<div align="center">
    
# **Sistem Penerimaan Siswa Baru**

<img src="/public/img/Dashboard.png" width="500" alt="Img Dashboard" >

</div>
</div>
<p align="center">
<a href="https://github.com/AhmadMuzayyin/simpsb/stargazers" target="_blank"><img src="https://img.shields.io/github/stars/AhmadMuzayyin/simpsb" alt="Stars" /></a>
<a href="https://github.com/AhmadMuzayyin/simpsb/network/members" target="_blank"><img src="https://img.shields.io/github/forks/AhmadMuzayyin/simpsb" alt="Forks" /></a>
</p>

## Description
**SIMPSB (Sistem Penerimaan Siswa Baru)** adalah sebuah aplikasi yang dirancang dengan Framework **[Laravel 11]('https://laravel.com/docs/11.x/')** untuk mempermudah proses pendaftaran dan seleksi calon siswa baru di lembaga pendidikan. Aplikasi ini mengotomatiskan berbagai tahapan dalam penerimaan siswa baru, mulai dari pendaftaran online, pengunggahan dokumen, hingga verifikasi data calon siswa. Dengan antarmuka yang user-friendly, SIMPSB memungkinkan admin dan pihak sekolah untuk mengelola pendaftaran siswa baru secara efisien dan terstruktur.
Salah satu fitur unggulan dari SIMPSB adalah **seleksi bantuan siswa** yang dilengkapi dengan sistem pendukung keputusan (SPK) menggunakan **metode Profile Matching**. Fitur ini dirancang untuk membantu pihak sekolah dalam menentukan calon penerima bantuan berdasarkan kriteria yang telah ditetapkan. Dengan menggunakan metode Profile Matching, aplikasi ini mampu melakukan perbandingan profil siswa dengan kriteria ideal yang diharapkan, sehingga menghasilkan peringkat dan keputusan yang lebih akurat dan objektif dalam pemberian bantuan.
Dengan SIMPSB, proses seleksi siswa baru dan pemberian bantuan dapat dilakukan dengan lebih transparan, cepat, dan efisien, menjadikan aplikasi ini sebagai solusi modern dalam manajemen penerimaan siswa baru di era digital.

Aplikasi ini memiliki beberapa fitur diantaranya:
1. Pendaftaran siswa baru
2. Pendaftaran siswa baru dengan jalur pindahan
3. Pendaftaran siswa baru dengan jalur umum
4. Seleksi bantuan siswa
5. Pengelolaan data siswa
6. Pengelolaan data pendaftaran
7. Galeri Kegiatan
8. Blog Informasi

## Installation
1. Clone repository ini
```bash
git clone https://github.com/AhmadMuzayyin/simpsb.git
```
2. Buka terminal dan arahkan ke folder repository ini
```bash
cd simpsb
```
3. Install dependencies
```bash
composer install
```
4. Setting file database
```bash
copy file .env.example menjadi .env dengan perintah
cp .env.example .env

sesuaikan dengan pengaturan database anda
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

migrate database
php artisan migrate
```
5. Generate app key
```bash
php artisan key:generate
```
6. Jalanakan aplikasi
```bash
php artisan serve
```
7. Buka browser dan ketikkan `localhost:8000`

## Contributing
Pull requests dipersilakan. Untuk perubahan besar, harap buka issues terlebih dahulu untuk mendiskusikan apa yang ingin Anda ubah.
Harap pastikan untuk memperbarui unit test sebagaimana mestinya.