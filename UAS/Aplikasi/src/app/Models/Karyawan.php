<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    protected $fillable = 
    [
    'nama', 
    'email', 
    'posisi',
    'keterampilan', 
    'skor_produktivitas'
    ];

    public function proyek(): HasMany
    {
        return $this->hasMany(Proyek::class, 'manajer_proyek_id');
    }

    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class);
    }

    public function logAktivitas(): HasMany
    {
        return $this->hasMany(LogAktivitas::class);
    }
}
