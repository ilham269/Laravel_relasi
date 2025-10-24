@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show data telepon</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" name="nama" value="{{ $telepon->nomor }}" disabled>
                        </div>
                        <a href="{{ route('telepon.index') }}" class="btn btn-success">back</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection