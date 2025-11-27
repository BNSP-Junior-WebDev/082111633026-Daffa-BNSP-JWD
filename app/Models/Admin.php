<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    protected $fillable = [
        'nama_admin',
        'user_admin',
        'pass_admin'
    ];

    public $timestamps = false;

    public function peminjamans(): HasMany {
        return $this->hasMany(Peminjaman::class);
    }
}
