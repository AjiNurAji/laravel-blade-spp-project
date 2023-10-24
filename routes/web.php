<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::guard('siswa')->check() || Auth::guard('petugas')->check()) {
        return redirect('/homepage');
    }
    return view('pages.login');
})->name('login');

Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

// Route all
Route::middleware(['auth:petugas,siswa'])->group(function () {
    // Route homepage
    Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route for petugas
Route::middleware(['auth:petugas'])->group(function () {
    Route::get('/data-siswa', [AdminController::class, 'viewDataSiswa'])->name('crud-data-siswa');
});
Route::get('/crud-data-kelas')->name('crud-data-kelas');
Route::get('/data-siswa/create')->name('create-data-siswa');
Route::get('/crud-data-spp')->name('crud-data-spp');
Route::get('/crud-data-petugas')->name('crud-data-petugas');
Route::get('/create-data-transaksi')->name('create-data-transaksi');
Route::get('/histori-bayar')->name('histori-bayar');
Route::get('/user-setting')->name('user-setting');
Route::get('/edit-siswa')->name('edit-siswa');
Route::get('/softdelete-siswa-siswa')->name('softdelete-data-siswa');