<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'kode_mk' => fake()->unique()->numerify('MK####'),
            'nama_mk' => fake()->sentence(3),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => 1,
        ];
    }
}
