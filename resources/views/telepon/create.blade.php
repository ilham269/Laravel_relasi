@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data telepon</div>

                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nomor" class="form-label">nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor">
                            @error('nomor')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label>Id pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                @foreach($pengguna as $pngn)
                                <option value="{{$pngn->id}}">{{$pngn->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection