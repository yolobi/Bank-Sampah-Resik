@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <div class="p-2">
            <a href="{{ route('request-penarikan-user') }}" class="btn btn-primary">
                Request Penarikan Baru
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = 0;   
                @endphp
                @foreach ($penarikan as $data)
                    @php
                        $number++;
                    @endphp
                    <tr>
                        <th scope="row">{{ $number }}</th>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $penarikan->links() !!}
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endpush