<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function showLogin() {
        return view('auth.login');
    }
    public function showRegister() {
        return view('auth.register');
    }

    public function login(Request $request) {
           $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
           ]);

        //  proses login :
        if(Auth::attempt($credentials)) {
            // Menghapus session lama agar tidak ada duplikasi : 
            $request->session()->regenerate(); // tidak bisa memanfaatkan session yang lama jika ini di tambahkan
            return redirect()->route('siswa.index');
        }

        throw ValidationException::withMessages([
            // error nya akan di akses di @error email
            'email' => 'Email Or Password Is Incorrect'
        ]);
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed', // untuk membandingkan name nya harus password_condirmation
        ]);
        
        // proses register : 
        $user = User::create($validated);

        // authentikasi facades : antarmuka dari laravel agar mempermudah authentikasi user
        Auth::login($user); // dengan begini akan terautentikasi secara otomatis.

        return redirect()->route(('siswa.index'));
    }

    public function logout(Request $request) {
        Auth::logout();
        // hancurkan session lama : 
        $request->session()->invalidate();
        // regenretae token baru : Agar lebih secure
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
