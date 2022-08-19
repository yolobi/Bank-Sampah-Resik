@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Edit</th>
            </thead>
            <tbody>
                @foreach ($sampah as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>
                            <form action="{{ route('post-edit-harga') }}" method="POST">
                                @csrf
                                <input class="form-group" type="number" name="harga">
                                <input class="form-group" type="hidden" name="id" value="{{ $data->id }}">
                                <a type="submit" class="btn btn-success">Update</a>
                            </form>
                        </td>
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