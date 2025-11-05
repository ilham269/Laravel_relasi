@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Detail datacustomer
                </div>

                <div class="card-body">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Company Name:</label>
                        <div>{{ $datacustomer->companyname }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Address:</label>
                        <div>{{ $datacustomer->address }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone:</label>
                        <div>{{ $datacustomer->phone }}</div>
                    </div>

                    <a href="{{ route('customer.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
