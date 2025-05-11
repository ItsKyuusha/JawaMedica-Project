<?php

namespace Database\Seeders;
use App\Models\JadwalDokter;
use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokter = Dokter::first();

        JadwalDokter::insert([
            [
                'dokter_id' => $dokter->id,
                'hari' => 'Senin',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '12:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dokter_id' => $dokter->id,
                'hari' => 'Rabu',
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}
