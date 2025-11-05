<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Suplier;
use Illuminate\Http\Request;


class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataproduct = Product::all();
        return view('products.index', compact('dataproduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataproduct = Product::all();
        $datasupplier = Suplier::all(); 

        return view('products.create', compact('dataproduct','datasupplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    $request->validate([
        'productname'  => 'required|string|max:255',
        'supplier_id'  => 'required|exists:supliers,id',
    ]);

    
    $dataproduct = new Product();
    $dataproduct->productname  = $request->productname;
    $dataproduct->supplier_id  = $request->supplier_id;
    $dataproduct->save();

    
    return redirect()->route('products.index')
                     ->with('success', 'Data berhasil disimpan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('supplier')->findOrFail($id);

    return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product = Product::findOrFail($id);
    $datasupplier = Suplier::all();

    return view('products.edit', compact('product', 'datasupplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'productname' => 'required|string|max:255',
        'supplier_id' => 'required|exists:supliers,id',
    ]);

    $product = Product::findOrFail($id);
    $product->productname = $request->productname;
    $product->supplier_id = $request->supplier_id;
    $product->save();

    return redirect()->route('products.index')
                     ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
