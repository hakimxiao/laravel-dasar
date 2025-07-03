<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('belajar-laravel/about', function () {
    // *    || pass with array ||
    $data = 'Abbu Solihin Alhakim';
    $umur = 21;
    return view('about', ['data' => $data, 'umur' => $umur]);
    // *    || pass with compact ||
    // $data = 'abu solihin alhakim';
    // $umur = 21;
    // return view('about', compact('data', 'umur')); // dia akan mencari variabel sesuai dengan nama nya
    // *    || pass with with ||
    // return view('about')
    //                         ->with('data', 'abu solihin alhakim')
    //                         ->with('umur', 21);
})->name('about');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

// Route::get('/siswa', function() {
//     // // DATA STATIS : 
//     // // $data = [
//     // //     [ 'nama'=>'budi', 'nilai'=>90, 'npm'=>123213 ],
//     // //     [ 'nama'=>'intan', 'nilai'=>98, 'npm'=>156213 ],
//     // //     [ 'nama'=>'jaka', 'nilai'=>91, 'npm'=>8888892 ],
//     // //     [ 'nama'=>'mudia', 'nilai'=>90, 'npm'=>232123 ],
//     // //     [ 'nama'=>'milan', 'nilai'=>90, 'npm'=>54644 ],
//     // // ];
//     // // DATA DATABASE :
//     // // $data = Siswa::all();                                                    --> ambil semua data 
//     // $data = Siswa::orderBy('nilai', 'desc')->get();       // --> ambil semua data urutkan berdasarkan created_at secara desc  
//     // return view('siswa.index', ['data'=>$data]);    
// });


Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

// // wildcard or url dinamis
// // maka url yang didalam {} bisa kita akses sebagai variabel
// Route::get('/siswa/{id}', function($id) {
//     // dd($id); --> function testing bagus digunakan untuk mengecek isi dari variabel wildcard
//     // Untuk mengambil params kita gunakan find dan gunakan array assosiatif untuk penamaan variabel 
//     // sehingga di show.blade kita ada global variabel bernama siswa.
//     //$detailSiswa = Siswa::find($id);   // -> mencari data siswa di model yang dimana menselect 1 berdsarkan id nya 
//     $detailSiswa = Siswa::findOrFail($id); // -> mengatasi kekurangan dari find, penjelasan dibawah
//     return view('siswa.show', ['detailSiswa'=> $detailSiswa]);    
// });


Route::get('/contact', function() {
    return view('contact');
})->name('contact');

/**
 * MASALAH Siswa::find()
 *  Jika find dia tidak menemukkan data atau null maka dia akan menghancurkan atau membreak aplikasi kita
 *      
 *      SOLUSI ? 
 *          MENGGUNAKAN Siswa::findOrFail()
 *              Dimana jika datanya tidak ada atau null maka dia akan menghandle nya dengan mengembalkikkan 404 | not fouund    
 */