@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show data murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.update', $murid->id) }}" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">nama_lengkap</label>
                            <input type="text" class="form-control" id="title" name="nama_lengkap" value="{{ $murid->nama_lengkap }}" disabled>
                        </div>
                         <div class="mb-3">
                            <label for="title" class="form-label">jenis_kelamin</label>
                            <input type="text" class="form-control" id="title" name="jenis_kelamin" value="{{ $murid->jenis_kelamin }}" disabled>
                        </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">tanggal_lahir</label>
                                <input type="text" class="form-control" id="title" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" disabled>
                            </div>
                         <div class="mb-3">
                            <label for="title" class="form-label">tempat_lahir</label>
                            <input type="text" class="form-control" id="title" name="tempat_lahir" value="{{ $murid->tempat_lahir }}" disabled>
                        </div>
                         <div class="mb-3">
                            <label for="title" class="form-label">agama</label>
                            <input type="text" class="form-control" id="title" name="agama" value="{{ $murid->agama }}" disabled>
                        </div>
                         <div class="mb-3">
                            <label for="title" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="title" name="alamat" value="{{ $murid->alamat }}" disabled>
                        </div>
                         <div class="mb-3">
                            <label for="title" class="form-label">email</label>
                            <input type="text" class="form-control" id="title" name="email" value="{{ $murid->email }}" disabled>
                        </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">nama_kelas</label>
                                <input type="text" class="form-control" id="title" name="id_kelas" value="{{ $murid->kelas->nama_kelas }}" disabled>
                            </div>

                        <a href="{{ route('murid.index') }}" class="btn btn-success">back</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection