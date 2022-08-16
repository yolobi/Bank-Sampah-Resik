@extends('adminlte::page')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>/edit-profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="{{ route('post-add-record') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Nama</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('name') is-invalid @enderror" name="name" placeholder="NAMA LENGKAP">
                                            </div>
                                            @error('name')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Tanggal</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="date" class="rounded @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="TANGGAL">
                                            </div>
                                            @error('tanggal')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Jenis</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('jenis') is-invalid @enderror" name="jenis" placeholder="JENIS SAMPAH">
                                            </div>
                                            @error('jenis')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Berat</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" class="rounded @error('berat') is-invalid @enderror" name="berat" placeholder="BERAT SAMPAH">
                                            </div>
                                            @error('berat')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Debet</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" class="rounded @error('debet') is-invalid @enderror" name="debet" placeholder="DEBET">
                                            </div>
                                            @error('debet')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection