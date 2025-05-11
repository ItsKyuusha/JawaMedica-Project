<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin JawaMedica',
                'email' => 'admin@jawamedica.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Staff Medis',
                'email' => 'staff@jawamedica.com',
                'password' => Hash::make('staff123'),
                'role' => 'staff',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
