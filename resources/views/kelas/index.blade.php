@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data kelas</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" kls-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama kelas</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($kelas as $kls)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $kls->nama_kelas }}</td>

              <td><a href="{{ route('kelas.edit', $kls->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('kelas.show', $kls->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('kelas.destroy', $kls->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('kelas.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection