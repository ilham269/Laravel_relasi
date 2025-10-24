@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data barang</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" brng-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama barang</th>
              <th scope="col">merk</th>
               <th scope="col">harga</th>
                <th scope="col">stok</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($databarang as $brng)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $brng->nama_barang }}</td>
              <td>{{ $brng->merk }}</td>
              <td>{{ $brng->harga }}</td>
              <td>{{ $brng->stok }}</td>

              <td><a href="{{ route('barang.edit', $brng->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('barang.show', $brng->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('barang.destroy', $brng->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('barang.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection