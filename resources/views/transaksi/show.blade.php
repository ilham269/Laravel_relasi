@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Transaksi</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                        <input type="text" class="form-control" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" value="{{ $transaksi->jumlah }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="total_harga" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" value="{{ $transaksi->total_harga }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control"
                            value="{{ $transaksi->pembeli->nama_pembeli ?? 'Tidak Diketahui' }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control"
                            value="{{ $transaksi->barang->nama_barang ?? 'Tidak Diketahui' }}" disabled>
                    </div>

                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
