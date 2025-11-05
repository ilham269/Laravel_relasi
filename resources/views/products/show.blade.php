@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Product</h5>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>

                <div class="card-body">

                    {{-- Product Name --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Product Name</label>
                        <div class="form-control">{{ $product->productname }}</div>
                    </div>

                    {{-- Supplier --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Supplier</label>
                        <div class="form-control">
                            {{ $product->supplier ? $product->supplier->companyname : '-' }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
