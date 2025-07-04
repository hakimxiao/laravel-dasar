<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    /** @use HasFactory<\Database\Factories\MentorFactory> */
    use HasFactory;

    // mengakses semua siswa melalui model siswa yang terkait dengan mentor
    public function siswa() {
        // MENTOR Many (SISWA M-------1 MENTOR) 
        return $this->hasMany(Siswa::class);
    }
}
