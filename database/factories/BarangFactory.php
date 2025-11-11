<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->unique()->word,
            'merk' => fake()->company,
            'harga' => random_int(10000, 1000000),
            'stok' => random_int(1, 100),
            'kategori' => 'lainnya',
            'deskripsi' => fake()->realText()
        ];
    }
}
