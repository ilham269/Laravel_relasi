@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data kelas</div>

                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">nama kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                            @error('nama_kelas')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection