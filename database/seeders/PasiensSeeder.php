<?php

namespace Database\Seeders;
use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasiensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi123'),
            'no_hp' => '081234567890',
            'alamat' => 'Jl. Merdeka No.123',
            'tanggal_lahir' => '1995-06-10',
            'jenis_kelamin' => 'L',
        ]);
    }
}
