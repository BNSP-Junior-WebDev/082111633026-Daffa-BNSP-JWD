<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'judul_buku',
        'tgl_terbit',
        'nama_pengarang',
        'nama_penerbit'
    ];

    protected $primaryKey = 'id_buku';

    public $timestamps = false;
}
