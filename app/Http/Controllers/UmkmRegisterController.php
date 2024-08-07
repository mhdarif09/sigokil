<?php

// UmkmRegisterController.php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UmkmRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-umkm');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_name' => ['required', 'string', 'max:255'],
            'owner_name' => ['required', 'string', 'max:255'],
            'store_address' => ['required', 'string', 'max:255'],
            'store_photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Validasi untuk `users`
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'category' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan data pengguna terlebih dahulu
        $user = User::create([
            'name' => $request->owner_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 'umkm', // Menandakan tipe pengguna sebagai UMKM
        ]);

        if ($request->hasFile('store_photo')) {
            $storePhotoPath = $request->file('store_photo')->store('store_photos', 'public');
        } else {
            $storePhotoPath = null;
        }

        // Menyimpan data UMKM dan mengaitkan dengan pengguna
        Umkm::create([
            'store_name' => $request->store_name,
            'owner_name' => $request->owner_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'store_address' => $request->store_address,
            'store_photo' => $storePhotoPath,
            'phone' => $request->phone,
            'user_id' => $user->id, // Mengaitkan UMKM dengan pengguna
            'category' => $request->category,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
