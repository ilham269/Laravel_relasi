@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data Pengguna</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">nama</label>
                            <input type="text" class="form-control" id="title" name="nama">
                            @error('title')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <button type="submit" class="btn btn-success">Tambahkan</button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection