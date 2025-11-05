@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data order</div>

                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>cutomer ID</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                @foreach($datacustomer as $cstmr)
                                <option value="{{$cstmr->id}}">{{$cstmr->companyname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>employees ID</label>
                            <select name="employeed_id" id="employeed_id" class="form-control">
                                @foreach($dataemployees as $mpls)
                                <option value="{{$mpls->id}}">{{$mpls->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="order_date" class="form-label">order date</label>
                            <input type="date" class="form-control" id="order_date" name="order_date">
                            @error('address')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
</input>
                        </div>

                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection