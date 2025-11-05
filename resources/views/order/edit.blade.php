@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Order</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $dataorder->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Pastikan method PUT untuk update -->

                        <!-- Customer -->
                        <div class="form-group mb-3">
                            <label for="customer_id">Customer ID</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                @foreach($datacustomer as $cstmr)
                                    <option value="{{ $cstmr->id }}" 
                                        {{ $dataorder->customer_id == $cstmr->id ? 'selected' : '' }}>
                                        {{ $cstmr->companyname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Employee -->
                        <div class="form-group mb-3">
                            <label for="employeed_id">Employee ID</label>
                            <select name="employeed_id" id="employeed_id" class="form-control">
                                @foreach($dataemployees as $mpls)
                                    <option value="{{ $mpls->id }}" 
                                        {{ $dataorder->employeed_id == $mpls->id ? 'selected' : '' }}>
                                        {{ $mpls->lastname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Order Date -->
                        <div class="mb-3">
                            <label for="order_date" class="form-label">Order Date</label>
                            <input type="date" class="form-control" id="order_date" name="order_date" 
                                   value="{{ old('order_date', $dataorder->order_date) }}">
                            @error('order_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('order.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
