<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class kelascontroller extends Controller
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
         $kelas = Kelas::all();

        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $request->validate(
            [
                'nama_kelas' => 'required|string|max:255',
            ],
            [
                'nama_kelas.required' => 'tidak boleh kosong',

            ]
        );
        $kelas           = new Kelas();
        $kelas->nama_kelas    = $request->nama_kelas;
        $kelas->save();

        session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_kelas' => 'required|string|max:255',
            ],
            [
                'nama_kelas.required' => 'tidak boleh kosong',

            ]
        );
        $kelas           = Kelas::findOrFail($id);
        $kelas->nama_kelas    = $request->nama_kelas;
        $kelas->save();
        session()->flash('success', 'data berhasil di edit');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        session()->flash('success', 'data berhasil di hapus');
        return redirect()->route('kelas.index');
    }
}
