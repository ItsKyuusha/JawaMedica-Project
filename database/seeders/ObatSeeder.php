<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    public function run()
    {
        Obat::create([
            'nama' => 'Paracetamol',
            'kategori' => 'Analgesik',
            'dosis' => '500mg',
            'deskripsi' => 'Untuk mengurangi demam dan nyeri',
            'stok' => 100,
            'harga' => 2000
        ]);

        Obat::create([
            'nama' => 'Amoxicillin',
            'kategori' => 'Antibiotik',
            'dosis' => '500mg',
            'deskripsi' => 'Antibiotik untuk infeksi bakteri',
            'stok' => 50,
            'harga' => 3000
        ]);
    }
}
