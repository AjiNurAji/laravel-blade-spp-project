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
            $request->session()->regenerate();
            return redirect()->route('homepage');
        } else  if (Auth::guard('siswa')->attempt($credentialsSiswa)) {
            return redirect()->route('homepage');
        }

        return redirect()->route('login')->withInput()->withErrors(['login_gagal' => 'Login gagal, username atau password salah!']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
