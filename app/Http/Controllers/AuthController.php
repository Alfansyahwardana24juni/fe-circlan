<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function tampilRegistrasi()
    {
        return view('auth/registrasi');
    }

    // Proses submit registrasi
    public function submitRegistrasi(Request $request)
    {
        // Validasi input registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Buat user baru jika validasi lolos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);  // Perbaikan typo
        $user->save();

         // Redirect ke halaman login dengan pesan sukses
         return redirect()->route('login.tampil')->with('success', 'Registrasi berhasil, silakan login.');
        }
        public function tampilProfile() {
            return view('profile');
        }
        public function tampilSocial()
        {
            $users = User::all(); // Ambil semua data user
            return view('social-friends', compact('users')); // Kirim data ke view
        }

        
    public function tampilEditprofile() // Nama fungsi disesuaikan dengan route di web.php
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('editprofile', compact('user')); // Pastikan file blade adalah 'editprofile.blade.php'
    }

        }    