@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data pengguna</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama </label>
                            <input type="text" class="form-control" id="title" name="nama" value="{{ $pengguna->nama }}">
                        </div>
                        <button type="submit" class="btn btn-success">save</button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection