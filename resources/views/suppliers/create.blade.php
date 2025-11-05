@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data supplier</div>

                <div class="card-body">
                    <form action="{{ route('suppliers.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="companyname" class="form-label">companyname</label>
                            <input type="text" class="form-control" id="companyname" name="companyname">
                            @error('companyname')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="adress" class="form-label">address</label>
                            <textarea type="text" class="form-control" id="adress" name="adress" placeholder="isi alamat">
                            @error('address')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                            @error('phone')
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