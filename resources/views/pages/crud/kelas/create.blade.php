@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('crud-data-kelas') }}" class="btn btn-info btn-xs btn-border btn-round">Back</a>
                            <div class="card-title mt-2">Tambah data kelas </div>
                        </div>
                        <div class="card-body table-responsive">
                            {{-- @error('create_gagal')
                                <div class="alert col-12 col-md-6 alert-danger pl-2" role="alert">
                                    <i class="la la-close"></i> {{ $message }}
                                </div>
                            @enderror
                            @if (session('message'))
                                <div class="alert col-12 col-md-6 alert-success pl-2">
                                    @if (session('status') === 'ok')
                                        <i class="la la-check"></i>
                                    @endif
                                    {{ session('message') }}
                                </div>
                            @endif --}}
                            <form action="{{ route('insert-data-kelas') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">NAMA KELAS</span>
                                    </div>
                                    <div class="col-12 col-md-6 p-0">
                                        <div class="form-group px-0 py-1">
                                            <input type="text" class="form-control" name="nama_kelas"
                                                value="{{ old('nama_kelas') }}" placeholder="Nama Kelas">
                                            @error('nama_kelas')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">KOMPETENSI KEAHLIAN</span>
                                    </div>
                                    <div class="col-12 col-md-6 p-0">
                                        <div class="form-group px-0 py-1">
                                            <input type="text" class="form-control" name="kompetensi_keahlian"
                                                value="{{ old('kompetensi_keahlian') }}" placeholder="Kompetensi Keahlian">
                                            @error('kompetensi_keahlian')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action px-0">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
