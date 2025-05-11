<?php

namespace Database\Seeders;
use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoktersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'nama' => 'dr. Rina Fitri',
            'spesialis' => 'Umum',
            'no_str' => 'STR123456',
            'no_hp' => '081212341234',
            'email' => 'rina@jawamedica.com',
            'alamat' => 'Jl. Kesehatan No.10'
        ]);
    }
}
