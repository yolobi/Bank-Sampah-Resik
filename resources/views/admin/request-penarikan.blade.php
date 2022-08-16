@extends('adminlte::page')

@section('content')
    <div class="container p-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Penarikan</th>
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
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>
                            @if ($data->status == 'sedang diproses')
                                <a href="{{ route('penarikan-setuju', [$data->id]) }}" class="btn btn-success">setujui</a>
                                <a href="{{ route('penarikan-tolak', [$data->id]) }}" class="btn btn-danger">tolak</a>
                            @else
                                {{$data->status}}
                            @endif
                            
                        </td>
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