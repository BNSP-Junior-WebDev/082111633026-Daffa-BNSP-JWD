<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id('kode_pinjam')->primary()->autoIncrement();
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_peminjam');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->foreign('id_peminjam')->references('id_peminjam')->on('peminjams');
            $table->dateTime('tgl_pesan');
            $table->dateTime('tgl_ambil');
            $table->dateTime('tgl_wajibkembali');
            $table->dateTime('tgl_kembali');
            $table->enum('status_pinjam', ['diproses', 'disetujui', 'ditolak', 'selesai'])->default('diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
