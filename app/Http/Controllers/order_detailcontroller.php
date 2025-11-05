<?php

namespace App\Http\Controllers;

use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Order;


use Illuminate\Http\Request;

class order_detailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataorderdetail = Order_detail::all();
        return view('order_detail.index', compact('dataorderdetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataorder = Order::all();
        $dataproduct = Product::all();
        return view('order_detail.create', compact('dataorder','dataproduct'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataorderdetail = new Order_detail();
    $dataorderdetail->product_id = $request->product_id; 
    $dataorderdetail->order_id   = $request->order_date; 
    $dataorderdetail->unit_price  = $request->unit_price; 
    $dataorderdetail->qty        = $request->qty; 
    $dataorderdetail->save();

    session()->flash('success', 'Data berhasil disimpan');
    return redirect()->route('order_detail.index');

    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataorderdetail = Order_detail::findOrFail($id);
        return view('order_detail.show', compact('dataorderdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataorder = Order::all();
        $dataproduct = Product::all();
        $dataorderdetail = Order_detail::findOrFail($id);
        return view('order_detail.edit', compact('dataorder', 'dataproduct','dataorderdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
