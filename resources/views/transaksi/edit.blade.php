@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                            <input type="text" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi"
                                value="{{ old('tanggal_transaksi', $transaksi->tanggal_transaksi) }}">
                            @error('tanggal_transaksi')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                value="{{ old('jumlah', $transaksi->jumlah) }}">
                            @error('jumlah')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" name="total_harga"
                                value="{{ old('total_harga', $transaksi->total_harga) }}">
                            @error('total_harga')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Nama Pembeli</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control">
                                @foreach($datapembeli as $pmbl)
                                    <option value="{{ $pmbl->id }}"
                                        {{ $pmbl->id == $transaksi->id_pembeli ? 'selected' : '' }}>
                                        {{ $pmbl->nama_pembeli }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Nama Barang</label>
                            <select name="id_barang" id="id_barang" class="form-control">
                                @foreach($databarang as $brng)
                                    <option value="{{ $brng->id }}"
                                        {{ $brng->id == $transaksi->id_barang ? 'selected' : '' }}>
                                        {{ $brng->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
