@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Detail datasupplier</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Company Name:</label>
                        <div class="form-control">{{ $datasupplier->companyname }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Address:</label>
                        <div class="form-control">{{ $datasupplier->adress }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone:</label>
                        <div class="form-control">{{ $datasupplier->phone }}</div>
                    </div>

                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <a href="{{ route('suppliers.edit', $datasupplier->id) }}" class="btn btn-primary">
                        Edit
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
