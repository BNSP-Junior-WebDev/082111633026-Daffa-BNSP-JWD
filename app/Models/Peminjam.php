<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peminjam extends Authenticatable
{
    protected $fillable = [
        'nama_peminjam',
        'tgl_daftar',
        'user_peminjam',
        'pass_peminjam',
        'foto_peminjam'
    ];

    public $timestamps = false;
    
    public $tables = 'peminjams';

    protected $primaryKey = 'id_peminjam';

    protected $hidden = [
        'pass_peminjam',
        'remember_token',
    ];

    // Penting! Untuk password custom
    public function getAuthPassword()
    {
        return $this->pass_peminjam;
    }

    public function peminjamans(): HasMany {
        return $this->hasMany(Peminjaman::class);
    }
}
