<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // <-- Model User bawaan Laravel
use App\Models\UserFile;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash; // <-- untuk Hash::make()
use Illuminate\Support\Facades\Auth; // <-- untuk Auth::login()
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //form login
    public function showLoginForm()
    {
        return view('signin'); // ganti 'signin' sesuai nama file blade kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Alert::success('Berhasil', 'Selamat datang, ' . Auth::user()->name . '!');
            return redirect()->intended('dashboard');
        } else {
            Alert::error('Gagal', 'Email atau password salah. Silakan coba lagi.');
            return redirect()->back()->withInput();
        }
    }

    //form signup
    public function showSignupForm()
    {
        return view('signup');
    }
    public function signup(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validation->fails()) {
            Alert::error('Gagal', 'Pendaftaran gagal. Silakan periksa kembali data Anda.');
            return redirect()->back()->withErrors($validation)->withInput();
        }

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $user->assignRole('user'); // <-- Assign role 'user' ke user baru

        UserProfile::create([
            'user_id' => $user->id
        ]);

        UserFile::create([
            'user_id' => $user->id
        ]);

        // Login otomatis setelah daftar
        Alert::success('Berhasil', 'Selamat datang, ' . $user->name . '!');
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout(); // Logout user

        return redirect()->route('login');
    }
}
