<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            PasiensSeeder::class,
            DoktersSeeder::class,
            JadwalDokterSeeder::class,
            BookingsSeeder::class,
            RekamMedisSeeder::class,
            ArtikelsSeeder::class,
            ObatSeeder::class,
        ]);
    }
}
