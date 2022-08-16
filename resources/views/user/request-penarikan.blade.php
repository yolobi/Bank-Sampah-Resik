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
                                    <form action="{{ route('post-add-request') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Jumlah</p>
                                            </div>
                                            <hr>
                                            <div class="col-sm-9">
                                                <input type="text" class="rounded @error('jumlah') is-invalid @enderror" name="jumlah" placeholder="JUMLAH PENARIKAN">
                                            </div>
                                            @error('jumlah')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-primary">
                                                    Request
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