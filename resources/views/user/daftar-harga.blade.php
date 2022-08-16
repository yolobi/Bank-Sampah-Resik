@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
            </thead>
            <tbody>
                @foreach ($sampah as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $sampah->links() !!}
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endpush