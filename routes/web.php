<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// # - - - AUTH START - - - #
// * Route Handler AuthUI
Route::get('/auth/login', [AuthController::class, 'showLogin'])->named('auth.login');

Route::get('/auth/register', [AuthController::class, 'showRegister'])->named('auth.register');

// Route Handler AuthLogic
Route::post('/auth/login', [AuthController::class, 'login'])->named('login');

Route::post('/auth/register', [AuthController::class, 'register'])->named('register');
// # - - - AUTH END - - - #

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');

Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
