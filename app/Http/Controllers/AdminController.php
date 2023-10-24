<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function viewDataSiswa()
    {
        $userData = Auth::guard('petugas')->user();

        $siswas = Siswa::with(['spp', 'kelas'])->get()->toArray();
        return view('pages.crud.siswa.view', ['petugas' => $userData, 'siswas' => $siswas]);
    }
}
