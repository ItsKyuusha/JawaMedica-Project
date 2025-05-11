<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'nama', 'spesialis', 'no_str', 'no_hp', 'email', 'alamat'
    ];

    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
