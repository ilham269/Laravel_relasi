@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-sm">
        
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Data Product</h5>
          <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">+ Tambah Data</a>
        </div>

        <div class="card-body">

          {{-- Alert Success --}}
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          {{-- Table --}}
          <table class="table table-striped table-bordered">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Supplier</th>
                <th width="200px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataproduct as $prdct)
              <tr>
                <td>{{ $prdct->id }}</td>
                <td>{{ $prdct->productname }}</td>

                {{-- Menampilkan nama supplier melalui relasi --}}
                <td>
                  {{ $prdct->supplier->companyname ?? 'Tidak Ada Supplier' }}
                </td>

                <td>
                  <a href="{{ route('products.show', $prdct->id) }}" class="btn btn-warning btn-sm">Show</a>
                  <a href="{{ route('products.edit', $prdct->id) }}" class="btn btn-primary btn-sm">Edit</a>

                  <form action="{{ route('products.destroy', $prdct->id) }}" 
                        method="POST" 
                        class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                      onclick="return confirm('Yakin ingin menghapus data ini?')">
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
