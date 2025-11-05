@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data suppliers</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" brng-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">companyname</th>
              <th scope="col">address</th>
               <th scope="col">phone</th>
                
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($datasupplier as $brng)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $brng->companyname }}</td>
              <td>{{ $brng->adress }}</td>
              <td>{{ $brng->phone }}</td>

              <td><a href="{{ route('suppliers.edit', $brng->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('suppliers.show', $brng->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('suppliers.destroy', $brng->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('suppliers.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection