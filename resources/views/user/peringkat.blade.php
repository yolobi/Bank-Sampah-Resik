@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah Tabungan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = 0;   
                @endphp
                @foreach ($data as $user)
                    @php
                        $number++;
                    @endphp
                    <tr>
                        <th scope="row">{{ $number }}</th>
                        <td>{{ strtoupper($user->name) }}</td>
                        <td>{{ $user->saldo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endpush