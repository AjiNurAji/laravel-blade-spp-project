<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function proses_login(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Credentials for admin and petugas
        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        //Credentials for siswa
        $credentialsSiswa = [
            'nisn' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('petugas')->attempt($credentials)) {
            return "<script> alert('Selamat datang ".Auth::guard('petugas')->user()->nama_petugas."')</script>";
        } else  if (Auth::guard('siswa')->attempt($credentialsSiswa)) {
            return "<script> alert('Selamat datang ".Auth::guard('siswa')->user()->nama."')</script>";
        }

        return redirect()->route('login')->withInput()->withErrors(['login_gagal' => 'Login gagal, username atau password salah!']);
    }
}
