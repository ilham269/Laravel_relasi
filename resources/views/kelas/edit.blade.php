@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data kelas</div>

                <div class="card-body">
                    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">nama kelas </label>
                            <input type="text" class="form-control" id="title" name="nama_kelas" value="{{ $kelas->nama_kelas }}">
                        </div>
                        <button type="submit" class="btn btn-success">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection