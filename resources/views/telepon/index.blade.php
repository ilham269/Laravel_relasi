@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data telepon</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" pngn-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">nomer telepon</th>
              <th scope="col">Id pengguna</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($telepon as $pngn)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $pngn->nomor }}</td>
              <td>{{ $pngn->pengguna->nama }}</td>

              <td><a href="{{ route('telepon.edit', $pngn->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('telepon.show', $pngn->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('telepon.destroy', $pngn->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('telepon.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection