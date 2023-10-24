# Aplikasi Pembayaran SPP

Ditujukan untuk memenuhi Uji Kompetensi Keahlian Jurusan PPLG 2023.
> Projek ini merupakan _project open source_, Anda dapat download/fork/clone pada projek ini.
> Aplikasi ini memiliki 3 Role user yaitu Administrator, Petugas, & Siswa.

Teknologi dan library yang digunakan :
1. Laravel (<a href="https://laravel.com/docs/10.x" target="_blank">dokumentasi</a>)
2. Bootstrap (<a href="https://realrashid.github.io/sweet-alert/install" target="_blank">dokumentasi</a>)
3. SweetAlert (<a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">dokumentasi</a>)
4. Ready Bootstrap Dashboard by themekita (<a href="https://themekita.com/ready-bootstrap-dashboard.html" target="_blank">dokumentasi</a>)

## Configuration
Berikut cara mengistall atau mengklone aplikasi pembayaran spp ke local storage atau kompoter yang digunakan :
1. Lakukan cloning project ini menggunakan terminal (cmd, git bash, powershell, dll) di tempat (folder) yang diinginkan    
```
git clone https://github.com/AjiNurAji/laravel-blade-spp-project.git
```
2. Install dependensi yang dibutuhkan (supaya ada vendor)
```
composer install
```
or
```
composer update
```
3. Copy `.env.example` dan rename menjadi `.env`
4. Generate app key
```
php artisan key:generate
```
5. Nyalakan server MYSQL dan Apache (XAMPP, MAMP, dll), Lalu buat database di phpMyadmin
6. Ubah isi `DB_DATABASE` pada `.env` dengan nama database yang dibuat
7. Lalu jalankan migrasi dan seeder
```
php artisan migrate --seed
```
8. Jalankan server
```
php artisan serve
```
9. Buka url dibawah menggunakan browser (Chrome, Edge, FireFox, Opera, dll)
```
http://127.0.0.1:8000
```

## User yang disediakan
<table>
    <thead>
        <td>Role</td>
        <td>Username or Nisn</td>
        <td>Password</td>
    </thead>
    <tbody>
        <tr>
            <td>Administrator</td>
            <td>abdul</td>
            <td>abdul</td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td>ahmad</td>
            <td>ahmad</td>
        </tr>
        <tr>
            <td rowspan="5">Siswa</td>
            <td>001123</td>
            <td>001123</td>
        </tr>
        <tr>
            <td>001124</td>
            <td>001124</td>
        </tr>
        <tr>
            <td>001125</td>
            <td>001125</td>
        </tr>
        <tr>
            <td>001126</td>
            <td>001126</td>
        </tr>
        <tr>
            <td>001127</td>
            <td>001127</td>
        </tr>
    </tbody>
</table>