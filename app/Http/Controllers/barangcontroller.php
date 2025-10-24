<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databarang = Barang::all();
        return view('barang.index', compact('databarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $databarang = Barang::all();
        return view('barang.create', compact('databarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $databarang = Barang::find($id);
        return view('barang.show', compact('databarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $databarang = Barang::find($id);
        return view('barang.edit', compact('databarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $databarang = Barang::find($id);
        $databarang->update([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $databarang = Barang::find($id);
        $databarang->delete();
        return redirect()->route('barang.index');
    }
}
