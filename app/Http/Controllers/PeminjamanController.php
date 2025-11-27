<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function viewFormulirPeminjaman() {
        return view('user.formulir_peminjaman');
    }
}
