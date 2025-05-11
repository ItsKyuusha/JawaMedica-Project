<?php

namespace Database\Seeders;
use App\Models\Booking;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'pasien_id' => Pasien::first()->id,
            'dokter_id' => Dokter::first()->id,
            'tanggal_konsultasi' => now()->addDays(2)->toDateString(),
            'jam_konsultasi' => '08:30:00',
            'keluhan' => 'Sakit kepala dan demam',
            'status' => 'menunggu'
        ]);
    }
}
