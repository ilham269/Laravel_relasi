@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show data barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.update', $databarang->id) }}" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama barang</label>
                            <input type="text" class="form-control" id="title" name="nama" value="{{ $databarang->nama_barang }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="title" name="merk" value="{{ $databarang->merk }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="title" name="harga" value="{{ $databarang->harga }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Stok</label>
                            <input type="text" class="form-control" id="title" name="stok" value="{{ $databarang->stok }}" disabled>
                        </div>
                        
                        <a href="{{ route('barang.index') }}" class="btn btn-success">back</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection