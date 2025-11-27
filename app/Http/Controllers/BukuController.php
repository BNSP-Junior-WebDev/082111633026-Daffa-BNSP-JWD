<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function viewDaftarBuku(Request $request) {
        $bukus = Buku::all();
        return view('admin.daftar_buku', compact('bukus'));
    }

    public function viewTambahBuku() {
        return view('admin.tambah_buku');
    }

    public function tambahBuku(Request $request) {
        Buku::create([
            "judul_buku" => $request->judul_buku,
            "tgl_terbit" => $request->tgl_terbit,
            "nama_pengarang" => $request->nama_pengarang,
            "nama_penerbit" => $request->nama_penerbit,
        ]);
        return redirect()->route('view.admin.daftar_buku');
    }

    public function viewEditBuku($id) {
        $buku = Buku::where('id_buku', $id)->first();
        return view('admin.edit_buku', compact('buku'));
    }

    public function editBuku(Request $request, $id_buku){
        $buku = Buku::where('id_buku', $id_buku)->first();
        $buku->update([
            "judul_buku" => $request->judul_buku,
            "tgl_terbit" => $request->tgl_terbit,
            "nama_pengarang" => $request->nama_pengarang,
            "nama_penerbit" => $request->nama_penerbit,
        ]);
        return redirect()->route('view.admin.daftar_buku');
    }
    
    public function deleteBuku($id) {
        $buku = Buku::where('id_buku', $id)->first();
        $buku->delete();
        return redirect()->route('view.admin.daftar_buku');
    }
}
