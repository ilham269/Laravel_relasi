<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;


class transaksicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatransaksi = Transaksi::all();
        return view('transaksi.index', compact('datatransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapembeli = Pembeli::all();
        $databarang = Barang::all();
        return view('transaksi.create', compact('datapembeli','databarang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $datatransaksi           = new Transaksi();
        $datatransaksi->tanggal_transaksi    = $request->tanggal_transaksi;
        $datatransaksi->jumlah    = $request->jumlah;
        $datatransaksi->total_harga    = $request->total_harga;
        $datatransaksi->id_barang    = $request->id_barang;
        $datatransaksi->id_pembeli    = $request->id_pembeli;
        $datatransaksi->save();

        session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            
                $transaksi = Transaksi::with(['pembeli', 'barang'])->findOrFail($id);
                return view('transaksi.show', compact('transaksi'));
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $transaksi = Transaksi::findOrFail($id);
    $datapembeli = Pembeli::all();
    $databarang = Barang::all();

    return view('transaksi.edit', compact('transaksi', 'datapembeli', 'databarang'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'tanggal_transaksi' => 'required',
        'jumlah' => 'required|numeric',
        'total_harga' => 'required|numeric',
        'id_pembeli' => 'required|exists:pembelis,id',
        'id_barang' => 'required|exists:barangs,id',
    ]);

    // Cari data transaksi berdasarkan id
    $transaksi = Transaksi::findOrFail($id);

    // Update data transaksi
    $transaksi->update([
        'tanggal_transaksi' => $request->tanggal_transaksi,
        'jumlah' => $request->jumlah,
        'total_harga' => $request->total_harga,
        'id_pembeli' => $request->id_pembeli,
        'id_barang' => $request->id_barang,
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $datatransaksi = Transaksi::find($id);
        $datatransaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
