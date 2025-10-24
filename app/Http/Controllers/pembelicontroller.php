<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class pembelicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapembeli = Pembeli::all();
        return view('pembeli.index', compact('datapembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapembeli = Pembeli::all();
        return view('pembeli.create', compact('datapembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembeli::create([
            'nama_pembeli' => $request->nama_pembeli,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datapembeli = Pembeli::find($id);
        return view('pembeli.show', compact('datapembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datapembeli = Pembeli::find($id);
        return view('pembeli.edit', compact('datapembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                 $datapembeli = Pembeli::findOrFail($id);
        $datapembeli->nama_pembeli = $request->nama_pembeli;
        $datapembeli->jenis_kelamin = $request->jenis_kelamin;
        $datapembeli->no_telepon = $request->no_telepon;
        $datapembeli->save();

        session()->flash('success', 'Data Berhasil Diupdate');
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapembeli = Pembeli::find($id);
        $datapembeli->delete();
        return redirect()->route('pembeli.index');  
    }
}
