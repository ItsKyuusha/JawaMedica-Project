<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama', 'email', 'password', 'no_hp', 'alamat', 'tanggal_lahir', 'jenis_kelamin'
    ];

    protected $hidden = ['password'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
