@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Detail order</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-bold">customer_id</label>
                        <div class="form-control">{{ $dataorderdetail->orders->id }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">product_id:</label>
                        <div class="form-control">{{ $dataorderdetail->products->id }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Quantity:</label>
                        <div class="form-control">{{ $dataorderdetail->qty }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">unit_price:</label>
                        <div class="form-control">{{ $dataorderdetail->unit_price }}</div>
                    </div>

                    <a href="{{ route('order_detail.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
