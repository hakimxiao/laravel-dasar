<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // definisikan factory yang tadi baru dibuat dengan cara 
    use HasFactory;

    // default action laravel
    //  siswa cari ke table siswas
    //  user cari ke table users 
    
    // ngakalin jika kita salah penamaan default laravel 
    protected $table = 'siswa';

    // menghilangkan Mass Assingment Agar kita bisa bebas create didalam colum dan tidak dibatasi jumlah
    protected $fillable = ['nama', 'tanggal_lahir', 'jurusan', 'nilai'];
}
