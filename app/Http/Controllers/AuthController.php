<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // <-- Model User bawaan Laravel
use Illuminate\Support\Facades\Hash; // <-- untuk Hash::make()
use Illuminate\Support\Facades\Auth; // <-- untuk Auth::login()


class AuthController extends Controller
{
    //form login
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // logika login nanti di sini
    }

    public function logout()
    {
        // logika logout nanti di sini

    }
    public function showLoginForm()
{
    return view('signin'); // ganti 'signin' sesuai nama file blade kamu
}
//form login
//form signup
public function showSignupForm()
{
    return view('signup');                                   
}
public function signup(Request $request)
    {
      
        $validation= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('user'); // <-- Assign role 'user' ke user baru

        // Login otomatis setelah daftar
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Akun berhasil dibuat!');
    }
}


