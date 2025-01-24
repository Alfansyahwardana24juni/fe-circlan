<?php

namespace App\Http\Controllers;

// Manual Authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class verifyController extends Controller
{
    public function tampilLogin()
    {
        return view('auth/login');
    }

    public function submitLogin(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah email ada di database
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Jika email tidak terdaftar
            return back()->with('loginError', 'Email tidak terdaftar.');
        }

        // Cek apakah password cocok
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika password salah
            return back()->with('loginError', 'Password salah.');
        }

        // Jika login berhasil
        $request->session()->regenerate();
        return redirect()->intended('/index');
    }

   
    // Function untuk logout
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}