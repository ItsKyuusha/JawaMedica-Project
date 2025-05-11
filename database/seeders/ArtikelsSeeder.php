<?php

namespace Database\Seeders;
use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul' => 'Tips Menjaga Kesehatan di Musim Pancaroba',
            'isi' => 'Pastikan asupan gizi seimbang, perbanyak minum air, dan olahraga rutin...',
            'gambar' => 'pancaroba.jpg',
            'penulis' => 'dr. Rina Fitri',
            'tanggal_publish' => now()->toDateString()
        ]);
    }
}
