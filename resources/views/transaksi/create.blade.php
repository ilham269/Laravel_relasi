@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tanggal_transaksi" class="form-label">tanggal_transaksi</label>
                            <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi">
                            @error('tanggal_transaksi')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                            @error('jumlah')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="total_harga" class="form-label">total_harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga">
                            @error('total_harga')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Id pembeli</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control">
                                @foreach($datapembeli as $pmbl)
                                <option value="{{$pmbl->id}}">{{$pmbl->nama_pembeli
                                    }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>ID barang</label>
                            <select name="id_barang" id="id_barang" class="form-control">
                                @foreach($databarang as $brng)
                                <option value="{{$brng->id}}">{{$brng->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection