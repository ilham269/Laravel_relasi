@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Data Product</h5>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>

                <div class="card-body">

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        {{-- Product Name --}}
                        <div class="mb-3">
                            <label for="productname" class="form-label">Product Name</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="productname" 
                                   name="productname"
                                   value="{{ old('productname') }}">
                            @error('productname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Supplier --}}
                        <div class="mb-3">
                            <label for="supplier_id" class="form-label">Supplier</label>
                            <select name="supplier_id" id="supplier_id" class="form-control">
                                <option value="">-- Pilih Supplier --</option>

                                @foreach($datasupplier as $supplier)
                                    <option value="{{ $supplier->id }}"
                                        {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->companyname }}
                                    </option>
                                @endforeach
                            </select>

                            @error('supplier_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Button --}}
                        <button type="submit" class="btn btn-success w-100">Tambahkan</button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
