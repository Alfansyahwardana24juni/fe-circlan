<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function tampil()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('editprofile', compact('user'));
    }

    // Tambahkan parameter Request $request di sini
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'gender' => 'nullable|in:Male,Female', // Sesuai dengan enum di database
            'pekerjaan' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'photoProfile' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->only(['name','email', 'gender', 'pekerjaan', 'lokasi']);

        if ($request->hasFile('photoProfile')) {
            // Hapus foto lama jika ada
            if ($user->photoProfile && Storage::disk('public')->exists($user->photoProfile)) {
                Storage::disk('public')->delete($user->photoProfile);
            }

            // Upload foto baru
            $path = $request->file('photoProfile')->store('profile-photos', 'public');
            $data['photoProfile'] = $path;
        }

        $user->update($data);

        return redirect()->route('profile.tampil')->with('success', 'Profile updated successfully');
    }
}