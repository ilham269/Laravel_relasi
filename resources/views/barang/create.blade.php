@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            @error('nama_barang')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="merk" class="form-label">merk</label>
                            <input type="text" class="form-control" id="merk" name="merk">
                            @error('merk')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            @error('harga')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                            @error('stok')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection