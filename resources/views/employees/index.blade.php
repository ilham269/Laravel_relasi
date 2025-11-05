@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">data employees</div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show " role="alert">
          {{ session('success') }}

          <button type="button" class="btn-close" mpls-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">lastname</th>
              <th scope="col">firstname</th>
               <th scope="col">birthdate</th>
               <th scope="col">address</th>
                
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($dataemployes as $mpls)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $mpls->lastname }}</td>
              <td>{{ $mpls->firstname }}</td>
              <td>{{ $mpls->birthdate }}</td>
              <td>{{ $mpls->address }}</td>

              <td><a href="{{ route('employees.edit', $mpls->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('employees.show', $mpls->id) }}" class="btn btn-warning"> show</a>
                <form action="{{ route('employees.destroy', $mpls->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ route('employees.create')}}" class="btn btn-success">tambah database</a>


        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection