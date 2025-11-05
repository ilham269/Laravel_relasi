@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Detail datasupplier</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-bold">customer_id</label>
                        <div class="form-control">{{ $dataorder->customer->companyname }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Address:</label>
                        <div class="form-control">{{ $dataorder->employees->lastname }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">order_date:</label>
                        <div class="form-control">{{ $dataorder->order_date }}</div>
                    </div>

                    <a href="{{ route('order.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
