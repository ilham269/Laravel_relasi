@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> add data order_detail</div>

                <div class="card-body">
                    <form action="{{ route('order_detail.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Product name</label>
                            <select name="product_id" id="product_id" class="form-control">
    @foreach($dataproduct as $prdct)
    <option value="{{$prdct->id}}">{{$prdct->id}}</option>
    @endforeach
</select>
                        </div>
                        <div class="form-group">
                            <label>order ID</label>
                            <select name="order_date" id="order_date" class="form-control">
                                @foreach($dataorder as $ordr)
                                <option value="{{$ordr->id}}">{{$ordr->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="unit_price" class="form-label"> unit price</label>
                            <input type="text" class="form-control" id="unit_price" name="unit_price">
                            @error('address')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
</input>
                        </div>
                        <div class="mb-3">
                            <label for="qty" class="form-label">qty</label>
                            <input type="text" class="form-control" id="qty" name="qty">
                            @error('qty')
                            <small style="color:red,">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection