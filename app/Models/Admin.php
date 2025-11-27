<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'nama_admin',
        'user_admin',
        'pass_admin'
    ];

    public $timestamps = false;

    protected $table = 'admins';
    
    protected $primaryKey = 'id_admin';

    protected $hidden = [
        'pass_admin',
        'remember_token',
    ];

    // Penting! Untuk password custom
    public function getAuthPassword()
    {
        return $this->pass_admin;
    }
    
    public function peminjamans(): HasMany {
        return $this->hasMany(Peminjaman::class);
    }
}
