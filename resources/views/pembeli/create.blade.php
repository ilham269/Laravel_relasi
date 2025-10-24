@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pembeli" class="form-label">nama pembeli</label>
                            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli">
                            @error('nama_pembeli')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                         <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" >
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                            @error('no_telepon')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                            @error('stok')
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