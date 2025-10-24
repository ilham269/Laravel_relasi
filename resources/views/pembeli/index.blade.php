@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data pembeli</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" pmbl$pmbl-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama pembeli</th>
              <th scope="col">jenis kelamin</th>
               <th scope="col">No telepon</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($datapembeli as $pmbl)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $pmbl->nama_pembeli }}</td>
              <td>{{ $pmbl->jenis_kelamin }}</td>
              <td>{{ $pmbl->no_telepon }}</td>
        

              <td><a href="{{ route('pembeli.edit', $pmbl->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('pembeli.show', $pmbl->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('pembeli.destroy', $pmbl->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('pembeli.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection