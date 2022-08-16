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
                                    <form action="{{ route('post-edit-profil') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Nama</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('name') is-invalid @enderror" name="name" placeholder="{{ $user->name }}">
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
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('email') is-invalid @enderror" name="email" placeholder="{{ $user->email }}">
                                            </div>
                                            @error('email')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Nomor HP</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('hp') is-invalid @enderror" name="hp" placeholder="{{ $user->no_hp }}">
                                            </div>
                                            @error('hp')
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