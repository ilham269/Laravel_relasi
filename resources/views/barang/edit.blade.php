@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.update', $databarang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama barang </label>
                            <input type="text" class="form-control" id="title" name="nama_barang" value="{{ $databarang->nama_barang }}">
                        </div>
                        <form action="{{ route('barang.update', $databarang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Merk </label>
                            <input type="text" class="form-control" id="title" name="merk" value="{{ $databarang->merk }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Harga </label>
                            <input type="text" class="form-control" id="title" name="harga" value="{{ $databarang->harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Stok </label>
                            <input type="text" class="form-control" id="title" name="stok" value="{{ $databarang->stok }}">
                        </div>
                        <button type="submit" class="btn btn-success">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection