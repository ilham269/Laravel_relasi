<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    // Tampilkan profil
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Tampilkan form edit
    public function edit()
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    // Proses update
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->name = $request->name;

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }

}
