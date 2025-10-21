<?php

namespace App\Http\Controllers;

use App\Models\sendiri;
use Illuminate\Http\Request;

class SendiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sendiris = sendiri::all();
        return view('sendiri.index', compact('sendiris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sendiri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $sendiri = new sendiri();
       $sendiri->name = $request->name;
       $sendiri->jenis_kelamin = $request->jenis_kelamin;
       $sendiri->tanggal_lahir = $request->tanggal_lahir;
       $sendiri->alamat = $request->alamat;

         $sendiri->save();

        session()->flash('success', 'Data berhasil disimpan!');
        return redirect()->route('index.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(sendiri $sendiri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sendiri $sendiri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sendiri $sendiri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sendiri $sendiri)
    {
        //
    }
}
