@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data datacustomer</div>

                <div class="card-body">
                    <form action="{{ route('customer.update', $datacustomer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="companyname" class="form-label">Company Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="companyname" 
                                name="companyname" 
                                value="{{ old('companyname', $datacustomer->companyname) }}">
                            @error('companyname')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea 
                                class="form-control" 
                                id="address" 
                                name="address" 
                                placeholder="Isi alamat">{{ old('address', $datacustomer->address) }}</textarea>
                            @error('address')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="phone" 
                                name="phone" 
                                value="{{ old('phone', $datacustomer->phone) }}">
                            @error('phone')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
