@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show data post</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" name="nama" value="{{ $pengguna->nama }}" disabled>
                        </div>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-success">back</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection