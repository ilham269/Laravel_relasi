@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data customer</div>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show " role="alert">
                    {{ session('success') }}

                    <button type="button" class="btn-close" cstmr-bs-dismiss="alert" aria-label="Close"></button>
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
                        @foreach($datacustomer as $cstmr)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $cstmr->companyname }}</td>
                            <td>{{ $cstmr->address }}</td>
                            <td>{{ $cstmr->phone }}</td>

                            <td><a href="{{ route('customer.edit', $cstmr->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('customer.show', $cstmr->id) }}" class="btn btn-warning"> show</a>
                                <form action="{{ route('customer.destroy', $cstmr->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('customer.create')}}" class="btn btn-success">tambah database</a>


                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection