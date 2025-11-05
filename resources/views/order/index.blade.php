@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data order</div>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show " role="alert">
                    {{ session('success') }}

                    <button type="button" class="btn-close" ordr-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">customer ID</th>
                            <th scope="col">employees ID</th>
                            <th scope="col">order_date</th>

                            <th scope="col">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataorder as $ordr)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ordr->customer->companyname }}</td>
                            <td>{{ $ordr->employees->lastname }}</td>
                            <td>{{ $ordr->order_date }}</td>

                            <td><a href="{{ route('order.edit', $ordr->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('order.show', $ordr->id) }}" class="btn btn-warning"> show</a>
                                <form action="{{ route('order.destroy', $ordr->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('order.create')}}" class="btn btn-success">tambah database</a>


                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection