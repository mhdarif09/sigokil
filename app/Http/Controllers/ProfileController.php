<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    public function create()
    {
        return view('profile.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profiles',
            'No_Telpon' => 'required|string|max:15',
            'Tanggal_Lahir' => 'required|date',
            'Jenis_Kelamin' => 'required|in:male,female',
            'Pilih_Gambar' => 'nullable|image|max:2048',
        ]);

        $Pilih_Gambar = null;
        if ($request->hasFile('Pilih_Gambar')) {
            $Pilih_Gambar = $request->file('Pilih_Gambar')->store('Pilih_Gambar', 'public');
        }

        Profile::create([
            'Nama' => $request->Nama,
            'email' => $request->email,
            'No_Telpon' => $request->No_Telpon,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Pilih_Gambar' => $Pilih_Gambar,
        ]);

        return redirect()->back()->with('success', 'Profile created successfully.');
    }
}
