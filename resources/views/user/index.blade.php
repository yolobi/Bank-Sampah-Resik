@extends('adminlte::page')

@section('content')
    <!-- Content header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="p-0 flex-grow-1">
                                    <h5 class="mt-2">Selamat Datang</h5>
                                    <p class="m-0"><b> {{ strtoupper($user->name) }} <b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">                                                                                               
                                <div class="col-sm-3">
                                    <div class="card  border-success  mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-bold">Bergabung Sejak</h5>
                                            <hr class="mt-4 mb-3">
                                            <p class="card-text">
                                                <i class="fas fa-check-circle"></i> Anda telah menjadi nasabah Bank Sampah Resik sejak
                                                    <span class="badge badge-success">{{ $user->created_at }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card  border-success  mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title text-bold">Saldo</h5>
                                            <hr class="mt-4 mb-3">
                                            <p class="card-text">
                                                Saldo Anda saat ini <b>Rp{{ $user->saldo }}</b>
                                            </p>
                                            <span>
                                                <button type="button" class="btn btn-sm btn-primary" id="unggah_laporan_2022">
                                                    <a href="{{ url('/user/buku-tabungan') }}" class="text-white">
                                                        Buku Tabungan
                                                    </a>
                                                </button>
                                            </span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection