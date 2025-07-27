<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLogin() {
        return view('auth.login');
    }
    public function showRegister() {
        return view('auth.register');
    }

    public function login() {
        
    }
    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed', // untuk membandingkan name nya harus password_condirmation

        ]);
        
        $user = User::create($validated);

        // authentikasi facades : antarmuka dari laravel agar mempermudah authentikasi user
        Auth::login($user); // dengan begini akan terautentikasi secara otomatis.

        return redirect()->route(('siswa.index'));
    }
}
