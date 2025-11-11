<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barang::create([
        //     'nama_barang' => 'parfum cowo',
        //     'merk' => 'Saff & Co',
        //     'harga' => 180000.00,
        //     'stok' => 10,
        //     'kategori' => 'lainnya',
        //     'deskripsi' => 'Parfum nyaman enak banget'
        // ]);

        Barang::factory()->count(100)->create();

    }
}
