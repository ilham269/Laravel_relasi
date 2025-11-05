<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;


class suppliercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         {
        $datasupplier = Suplier::all();
        return view('suppliers.index', compact('datasupplier'));
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $datasupplier = Suplier::all();
        return view('suppliers.create', compact('datasupplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datasupplier       = new Suplier();
        $datasupplier->companyname    = $request->companyname;
        $datasupplier->adress    = $request->adress;
        $datasupplier->phone    = $request->phone;
        $datasupplier->save();

         session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           $datasupplier = Suplier::findOrFail($id);
    return view('suppliers.show', compact('datasupplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $datasupplier = Suplier::findOrFail($id);
    return view('suppliers.edit', compact('datasupplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
        'companyname' => 'required|string|max:255',
        'adress' => 'nullable|string|max:1000',
        'phone' => 'nullable|string|max:20',
    ]);

    $datasupplier = Suplier::findOrFail($id);
    $datasupplier->update([
        'companyname' => $request->companyname,
        'adress' => $request->adress,
        'phone' => $request->phone,
    ]);

         return redirect()->route('suppliers.index')->with('success', 'Data berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $datasupplier = Suplier::find($id);
        $datasupplier->delete();
        return redirect()->route('suppliers.index');
    }
}
