<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'servis';

    protected $fillable = [
        'nama_servis',
        'deskripsi',
    ];

    // Relasi dengan Jadwal Servis
    public function jadwalServis()
    {
        return $this->hasMany(JadwalServis::class, 'servis_id');
    }
}
