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
Aplikasi ini merupakan aplikasi yang digunakan untuk melakukan pendaftaran siswa baru. Aplikasi ini dibuat menggunakan bahasa pemrograman php dan framework laravel. Aplikasi ini memiliki beberapa fitur diantaranya:
1. Pendaftaran siswa baru
4. Pendaftaran siswa baru dengan jalur pindahan
5. Pendaftaran siswa baru dengan jalur umum

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
4. setting file database
```bash
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

```
