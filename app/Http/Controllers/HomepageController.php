<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    private function getUserLogin()
    {
        if(Auth::guard('petugas')->check()) {
            return Auth::guard('petugas')->user();
        } else {
            return Auth::guard('siswa')->user();
        }
    }

    public function index()
    {
        $userData = $this->getUserLogin();

        if(Auth::guard('petugas')->check()) {
            $level = $userData->level;
            if($level === 'admin') {
                // Get data
                $currentYear = date('Y');
                $totalSiswa = Siswa::count();
                $totalPetugas = Petugas::count();
                $totalKelas = Kelas::count();
                $totalPembayaran = Pembayaran::where('tahun_dibayar', $currentYear)->count();

                // Set data to auth
                $userData->totalSiswa = $totalSiswa;
                $userData->totalPetugas = $totalPetugas;
                $userData->totalKelas = $totalKelas;
                $userData->totalPembayaran = $totalPembayaran;

                // Send data to homepage
                return view('pages.homepage', ['petugas' => $userData]);
            }
        } else {
            // Set Kelas siswa
            $kelasSiswa = $userData->kelas;
            $userData->kelas = $kelasSiswa;

            // Nama bulan kalender indonesia
            $bulan = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'Novermber',
                'Desember'
            ];

            // Get data transaksi
            $nisn = $userData->nisn;
            $currentYear = date('Y');
            $histori = Pembayaran::with(['siswa', 'siswa.spp'])->where('nisn', $nisn)->get();
            $nominalSpp = Spp::where('tahun', $currentYear)->value('nominal');

            return view('pages.homepage', [
                'siswa' => $userData,
                'bulan' => $bulan,
                'histori' => $histori,
                'nominal' => $nominalSpp
            ]);
        }
    }
}
