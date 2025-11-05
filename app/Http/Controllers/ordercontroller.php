<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employees;


class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataorder = Order::all();
        return view('order.index', compact('dataorder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $dataemployees = Employees::all();
        $datacustomer = Customer::all();
        return view('order.create', compact('datacustomer','dataemployees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $dataorder       = new Order();
        $dataorder->customer_id    = $request->customer_id;
        $dataorder->employeed_id    = $request->employeed_id;
        $dataorder->order_date    = $request->order_date;
        $dataorder->save();

         session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataorder = Order::findOrFail($id);
        $datacustomer = Customer::findOrFail($id);
        $dataemployees = Employees::findOrFail($id);
    return view('order.show', compact('dataorder','datacustomer','dataemployees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataorder       = Order::findOrFail($id);
        $datacustomer       = Customer::all();
        $dataemployees       = Employees::all();
        
        return view('order.edit', compact('datacustomer','dataemployees','dataorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $dataorder       =Order::findOrFail($id);
        $dataorder->customer_id    = $request->customer_id;
        $dataorder->employeed_id    = $request->employeed_id;
        $dataorder->order_date    = $request->order_date;
        $dataorder->save();

         session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $dataorder = Order::find($id);
        $dataorder->delete();
        return redirect()->route('order.index');
    }
}
