<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyek extends Model
{
    protected $fillable =
    [
    'nama_proyek', 
    'deskripsi', 
    'deadline', 
    'manajer_proyek_id'
    ];

    public function manajerProyek(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'manajer_proyek_id');
    }

    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class);
    }
}
