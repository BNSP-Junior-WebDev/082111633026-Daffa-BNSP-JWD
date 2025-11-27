<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'viewRegisterPeminjam'])->name('view.peminjam.register');
Route::post('/register', [AuthController::class, 'registerPeminjam'])->name('peminjam.register');
Route::get('/login', [AuthController::class, 'viewLoginPeminjam'])->name('view.peminjam.login');
Route::post('/login', [AuthController::class, 'loginPeminjam'])->name('peminjam.login');

Route::get('/admin/login', [AuthController::class, 'viewLoginAdmin'])->name('view.admin.login');
Route::post('/admin/login', [AuthController::class, 'loginAdmin'])->name('admin.login');

Route::get('/admin/daftar_buku', [BukuController::class, 'viewDaftarBuku'])->name('view.admin.daftar_buku');

Route::get('/admin/daftar_buku/tambah_buku', [BukuController::class, 'viewTambahBuku'])->name('view.admin.tambah_buku');
Route::post('/admin/daftar_buku/tambah_buku', [BukuController::class, 'tambahBuku'])->name('admin.tambah_buku');

Route::get('/admin/daftar_buku/edit_buku/{id}', [BukuController::class, 'viewEditBuku'])->name('view.admin.edit_buku');
Route::post('/admin/daftar_buku/edit_buku/{id}', [BukuController::class, 'editBuku'])->name('admin.edit_buku');

Route::post('/admin/daftar_buku/delete/{id}', [BukuController::class, 'deleteBuku'])->name('admin.delete_buku');