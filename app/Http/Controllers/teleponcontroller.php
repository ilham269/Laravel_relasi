<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\telepon;

class teleponcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $telepon = telepon::all();

        return view('telepon.index', compact('telepon'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $pengguna = Pengguna::all();
         return view('telepon.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
            [
                'nomor' => 'required|string|max:255',
            ],
            [
                'nomor.required' => 'tidak boleh kosong',

            ]
        );
        $telepon           = new telepon();
        $telepon->nomor    = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon = telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telepon = telepon::findOrFail($id);
        $pengguna = Pengguna::all();
        return view('telepon.edit', compact('telepon', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate(
            [
            'nomor' => 'required|string|min:12|max:12',
            ],
            [
            'nomor.required' => 'Nomor tidak boleh kosong',
            ]
            );

        $telepon = telepon::findOrFail($id);
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Data Berhasil Diupdate');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $telepon = telepon::findOrFail($id);
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'data berhasil di hapus');
    }
}
