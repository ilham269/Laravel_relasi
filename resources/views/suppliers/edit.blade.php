@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Edit Data Supplier</div>

                <div class="card-body">
                    
                    <form action="{{ route('suppliers.update', $datasupplier->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="companyname" class="form-label fw-bold">Company Name</label>
                            <input 
                                type="text" 
                                class="form-control @error('companyname') is-invalid @enderror" 
                                id="companyname" 
                                name="companyname" 
                                value="{{ old('companyname', $datasupplier->companyname) }}"
                            >
                            @error('companyname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="adress" class="form-label fw-bold">Address</label>
                            <textarea 
                                class="form-control @error('adress') is-invalid @enderror" 
                                id="adress" 
                                name="adress" 
                                rows="3"
                            >{{ old('adress', $datasupplier->adress) }}</textarea>

                            @error('adress')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input 
                                type="text" 
                                class="form-control @error('phone') is-invalid @enderror" 
                                id="phone" 
                                name="phone" 
                                value="{{ old('phone', $datasupplier->phone) }}"
                            >
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
