@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Dashboard</h3>
    
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>jenis_kelamin</th>
                <th>tanggal_lahir</th>
                <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sendiris as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
                <td>{{ $data->alamat }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
        <a href="{{ route('index.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
@endsection
