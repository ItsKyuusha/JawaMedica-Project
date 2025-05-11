<?php

namespace Database\Seeders;
use App\Models\RekamMedis;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RekamMedis::create([
            'pasien_id' => Pasien::first()->id,
            'dokter_id' => Dokter::first()->id,
            'user_id' => User::where('role', 'staff')->first()->id,
            'tanggal' => now()->toDateString(),
            'diagnosa' => 'Demam tifoid',
            'tindakan' => 'Pemberian cairan dan antipiretik',
            'resep_obat' => 'Paracetamol 500mg 3x sehari',
            'file_lampiran' => null
        ]);
    }
}
