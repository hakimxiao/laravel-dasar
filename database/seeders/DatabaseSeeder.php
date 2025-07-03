<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',           INI JIKA DIJALANKAN 2 KALI AKAN ERROR KARENA EMAIL SIFATNYA UNIK 
        // ]);

        $this->call([SiswaSeeder::class, FlightSeeder::class]);
    }
}
