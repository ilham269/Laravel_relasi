@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $datapembeli->id) }}" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama pembeli</label>
                            <input type="text" class="form-control" id="title" name="nama" value="{{ $datapembeli->nama_pembeli }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">jenis kelamin</label>
                            <input type="text" class="form-control" id="title" name="merk" value="{{ $datapembeli->jenis_kelamin }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="title" name="harga" value="{{ $datapembeli->no_telepon }}" disabled>
                        </div>
                        
                        <a href="{{ route('pembeli.index') }}" class="btn btn-success">back</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection