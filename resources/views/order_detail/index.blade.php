@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data order_detail</div>
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
                            <th scope="col">product_id</th>
                            <th scope="col">order_id</th>
                            <th scope="col">unit_price</th>
                            <th scope="col">qty</th>

                            <th scope="col">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataorderdetail as $dtl)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dtl->orders->id ?? '-' }}</td>
                            <td>{{ $dtl->products->id ?? '-' }}</td>
                            <td>{{ $dtl->unit_price ?? '-' }}</td>
                            <td>{{ $dtl->qty ?? '-' }}</td>
                            

                            <td><a href="{{ route('order_detail.edit', $dtl->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('order_detail.show', $dtl->id) }}" class="btn btn-warning"> show</a>
                                <form action="{{ route('order_detail.destroy', $dtl->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Aslina rek di hapus eta teh lur?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('order_detail.create')}}" class="btn btn-success">tambah database</a>


                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection