<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datacustomer = Customer::all();
        return view('customer.index', compact('datacustomer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
           $datacustomer = Customer::all();
        return view('customer.create', compact('datacustomer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $datacustomer       = new Customer();
        $datacustomer->companyname    = $request->companyname;
        $datacustomer->address   = $request->address;
        $datacustomer->phone    = $request->phone;
        $datacustomer->save();

         session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           $datacustomer = Customer::findOrFail($id);
    return view('customer.show', compact('datacustomer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $datacustomer = Customer::findOrFail($id);
    return view('customer.edit', compact('datacustomer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
        {
        $request->validate([
            'companyname' => 'required|string|max:255',
            'address'     => 'required|string',
            'phone'       => 'required|string|max:20',  
        ]);

        Customer::create([
            'companyname' => $request->companyname,
            'address'     => $request->address,
            'phone'       => $request->phone,
        ]);

        return redirect()->route('customer.index')->with('success', 'Customer added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully!');
    }
}
