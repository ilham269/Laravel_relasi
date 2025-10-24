@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data Transaksi</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" trnk$trnks$trnks-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">tanggal_transaksi</th>
              <th scope="col">jumlah</th>
               <th scope="col">total harga</th>
                <th scope="col">nama pembeli</th>
                 <th scope="col">nama barang</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($datatransaksi as $trnks)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $trnks->tanggal_transaksi }}</td>
              <td>{{ $trnks->jumlah }}</td>
              <td>{{ $trnks->total_harga }}</td>
              <td>{{ $trnks->pembeli->nama_pembeli }}</td>
              <td>{{ $trnks->barang->nama_barang }}</td>
        

              <td><a href="{{ route('transaksi.edit', $trnks->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('transaksi.show', $trnks->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('transaksi.destroy', $trnks->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('transaksi.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection