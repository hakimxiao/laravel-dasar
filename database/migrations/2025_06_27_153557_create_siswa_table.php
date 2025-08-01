<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('jurusan');
            $table->integer('nilai');
            $table->foreignId('mentor_id')->constrained('mentors')->onDelete('cascade'); // cascade akan otomatis melakukkan delete ketika parent nya tidak ada 

            // createdAt, updatedAt berasal dari timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
