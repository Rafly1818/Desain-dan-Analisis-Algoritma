<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemilik';

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
    ];

    // Relasi dengan Kendaraan
    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class, 'pemilik_id');
    }
}
