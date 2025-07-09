<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');

Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
