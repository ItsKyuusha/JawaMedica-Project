<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $fillable = [
        'pasien_id', 'dokter_id', 'user_id', 'tanggal', 'diagnosa', 'tindakan', 'resep_obat', 'file_lampiran'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function obats()
    {
        return $this->belongsToMany(Obat::class, 'rekam_medis_obat')
                    ->withPivot('jumlah')
                    ->withTimestamps();
    }

}

