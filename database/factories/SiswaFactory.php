<?php

namespace Database\Factories;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama'=> fake()->name(),
            'tanggal_lahir'=> fake()->dateTimeBetween('-25 years', '-20 years')->format('Y-m-d'),
            'jurusan'=>fake()->randomElement(['teknik informatika', 'teknik mesin', 'teknik elektro', 'teknik nuklir', 'teknik astro']),
            'nilai'=>fake()->numberBetween(80, 100),
            'mentor_id'=>Mentor::inRandomOrder()->first()->id
        ];
    }
}
