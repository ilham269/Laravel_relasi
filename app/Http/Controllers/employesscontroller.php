<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class employesscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataemployes = Employees::all();
        return view('employees.index', compact('dataemployes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
           $dataemployes = Employees::all();
        return view('employees.create', compact('dataemployes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'lastname' => 'required',
    'firstname' => 'required',
    'birthdate' => 'required',
    'address' => 'required',
]);
         $dataemployes       = new Employees();
        $dataemployes->lastname    = $request->lastname;
        $dataemployes->firstname    = $request->firstname;
        $dataemployes->birthdate    = $request->birthdate;
        $dataemployes->address   = $request->address;
        $dataemployes->save();

         session()->flash('success', 'data berhasil di simpan');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
           $dataemployes = Employees::findOrFail($id);
    return view('employees.show', compact('dataemployes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $employee = Employees::findOrFail($id);
    return view('employees.edit', compact('employee'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'lastname'   => 'required',
        'firstname'  => 'required',
        'birthdate'  => 'required|date',
        'address'    => 'required',
    ]);

    $employee = Employees::findOrFail($id);

    $employee->update([
        'lastname'  => $request->lastname,
        'firstname' => $request->firstname,
        'birthdate' => $request->birthdate,
        'address'   => $request->address,
    ]);

    return redirect()->route('employees.index')
        ->with('success', 'Employee updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $dataemployes = Employees::find($id);
        $dataemployes->delete();
        return redirect()->route('employees.index');
    }
}
