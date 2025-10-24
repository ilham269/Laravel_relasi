@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data telepon</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">nomer telepon </label>
                            <input type="text" class="form-control" id="title" name="nomor" value="{{ $telepon->nomor }}">
                        </div>
                        <div class="form-group">
                            <label>Id pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                @foreach($pengguna as $pngn)
                                <option value="{{$pngn->id}}" {{ $pngn->id == $telepon->id_pengguna ? 'selected' : ''  }}>{{$pngn->nama}}</option>
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