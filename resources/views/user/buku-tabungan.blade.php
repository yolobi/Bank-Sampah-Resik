@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = 0;   
                @endphp
                @foreach ($records as $data)
                    @php
                        $number++;
                    @endphp
                    <tr>
                        <th scope="row">{{ $number }}</th>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->berat }}</td>
                        <td>{{ $data->debet }}</td>
                        <td>{{ $data->kredit }}</td>
                        <td>{{ $data->saldo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $records->links() !!}
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endpush