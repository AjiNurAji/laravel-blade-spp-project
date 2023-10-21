<?php

use App\Http\Controllers\AuthController;
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