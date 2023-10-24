@extends('layouts.dashboard')

@section('content')
  <div class="container-fluid">
    <h4 class="page-title">Selamat datang {{ Auth::guard('petugas')->check() ? $petugas->nama_petugas : $siswa->nama }}</h4>
    @if (Auth::guard('petugas')->check())
      @php

        $currentYear = date('Y');

      @endphp
      @if ($petugas->level === 'admin')
        <div class="row">
          <div class="col-md-3">
            <div class="card card-stats card-warning">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="la la-users"></i>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center">
                    <div class="numbers">
                      <p class="card-category">Data Siswa</p>
                      <h4 class="card-title">{{ $petugas->totalSiswa }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats card-success">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="la la-user-secret"></i>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center">
                    <div class="numbers">
                      <p class="card-category">Data Petugas</p>
                      <h4 class="card-title">{{ $petugas->totalPetugas }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats card-danger">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="la la-building"></i>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center">
                    <div class="numbers">
                      <p class="card-category">Data Kelas</p>
                      <h4 class="card-title">{{ $petugas->totalKelas }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats card-primary">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="la la-money"></i>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center">
                    <div class="numbers">
                      <p class="card-category">Transaksi</p>
                      <h4 class="card-title">{{ $petugas->totalPembayaran }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
      
    @endif
  </div>
@stop