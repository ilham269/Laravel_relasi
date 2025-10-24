@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $datapembeli->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama pembeli </label>
                            <input type="text" class="form-control" id="title" name="nama_pembeli" value="{{ $datapembeli->nama_pembeli }}">
                        </div>
                        <form action="{{ route('pembeli.update', $datapembeli->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" {{ $datapembeli->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                <label for="laki">Laki-laki</label>
                                
                                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" {{ $datapembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">No telepon </label>
                            <input type="text" class="form-control" id="title" name="no_telepon" value="{{ $datapembeli->no_telepon }}">
                        </div>
                        <button type="submit" class="btn btn-success">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection