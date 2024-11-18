<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name', 'created_at', 'updated_at'];

    /**
     * Define the relationship between permissions and roles
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions');
    }
}
