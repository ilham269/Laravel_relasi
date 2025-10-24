<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\Kelas;

class muridcontroller extends Controller
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
        $murid = Murid::with('kelas')->get();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'id_kelas' => 'required|exists:kelas,id',
            ],
            [
                'nama_lengkap.required' => 'tidak boleh kosong',
                'jenis_kelamin.required' => 'tidak boleh kosong',
                'tanggal_lahir.required' => 'tidak boleh kosong',
                'tempat_lahir.required' => 'tidak boleh kosong',
                'agama.required' => 'tidak boleh kosong',
                'alamat.required' => 'tidak boleh kosong',
                'email.required' => 'tidak boleh kosong',
                'id_kelas.required' => 'tidak boleh kosong',

            ]
        );
        $murid           = new Murid();
        $murid->nama_lengkap    = $request->nama_lengkap;
        $murid->jenis_kelamin    = $request->jenis_kelamin;
        $murid->tanggal_lahir    = $request->tanggal_lahir;
        $murid->tempat_lahir    = $request->tempat_lahir;
        $murid->agama    = $request->agama;
        $murid->alamat    = $request->alamat;
        $murid->email    = $request->email;
        $murid->id_kelas    = $request->id_kelas;
        $murid->save();

        session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $murid = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'id_kelas' => 'required|exists:kelas,id',
            ],
            [
                'nama_lengkap.required' => 'tidak boleh kosong',
                'jenis_kelamin.required' => 'tidak boleh kosong',
                'tanggal_lahir.required' => 'tidak boleh kosong',
                'tempat_lahir.required' => 'tidak boleh kosong',
                'agama.required' => 'tidak boleh kosong',
                'alamat.required' => 'tidak boleh kosong',
                'email.required' => 'tidak boleh kosong',
                'id_kelas.required' => 'tidak boleh kosong',

            ]
        );
        $murid           = new Murid();
        $murid->nama_lengkap    = $request->nama_lengkap;
        $murid->jenis_kelamin    = $request->jenis_kelamin;
        $murid->tanggal_lahir    = $request->tanggal_lahir;
        $murid->tempat_lahir    = $request->tempat_lahir;
        $murid->agama    = $request->agama;
        $murid->alamat    = $request->alamat;
        $murid->email    = $request->email;
        $murid->id_kelas    = $request->id_kelas;
        $murid->save();

        session()->flash('success', 'Data Berhasil Diupdate');
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();

        session()->flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('murid.index');
    }
}
