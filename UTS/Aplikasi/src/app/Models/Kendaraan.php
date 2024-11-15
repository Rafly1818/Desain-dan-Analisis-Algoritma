<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';

    protected $fillable = [
        'pemilik_id',
        'merk',
        'model',
        'nomor_polisi',
        'tahun',
    ];

    // Relasi dengan Pemilik
    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'pemilik_id');
    }

    // Relasi dengan Jadwal Servis
    public function jadwalServis()
    {
        return $this->hasMany(JadwalServis::class, 'kendaraan_id');
    }
}
