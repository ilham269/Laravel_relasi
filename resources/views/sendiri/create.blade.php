@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Add biodata</h3>
    
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
           <form action="{{ route('sendiri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <tr>
                <td><input type="text" name="name" class="form-control" required></td>
                <td>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
                <td><input type="date" name="tanggal_lahir" class="form-control" required></td>
                <td><input type="text" name="alamat" class="form-control" required></td>
            </tr>
           </form>
        </tbody>

    </table>
    
        <a href="{{ route('index.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
@endsection
