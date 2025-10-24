@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data Murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.update', $murid->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">nama_lengkap </label>
                            <input type="text" class="form-control" id="title" name="nama_lengkap" value="{{ $murid->nama_lengkap }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" {{ $murid->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                <label for="laki">Laki-laki</label>
                                
                                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" {{ $murid->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">tanggal_lahir </label>
                            <input type="date" class="form-control" id="title" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">tempat_lahir </label>
                            <input type="text" class="form-control" id="title" name="tempat_lahir" value="{{ $murid->tempat_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">agama </label>
                            <input type="text" class="form-control" id="title" name="agama" value="{{ $murid->agama }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">alamat </label>
                            <input type="text" class="form-control" id="title" name="alamat" value="{{ $murid->alamat }}">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">email </label>
                            <input type="text" class="form-control" id="title" name="email" value="{{ $murid->email }}">
                        </div>
                         <div class="form-group">
                            <label>Id kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-control">
                                @foreach($kelas as $kls)
                                <option value="{{$kls->id}}" {{ $kls->id == $murid->id_kelas ? 'selected' : ''  }}>{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection