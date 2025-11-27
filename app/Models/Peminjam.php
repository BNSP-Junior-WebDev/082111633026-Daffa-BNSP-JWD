<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjam extends Model
{
    protected $fillable = [
        'nama_peminjam',
        'tgl_daftar',
        'user_peminjam',
        'pass_peminjam',
        'foto_peminjam'
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_peminjam';
    public $incrementing = false;
    protected $keyType = 'string';

    public function peminjamans(): HasMany {
        return $this->hasMany(Peminjaman::class);
    }
}
