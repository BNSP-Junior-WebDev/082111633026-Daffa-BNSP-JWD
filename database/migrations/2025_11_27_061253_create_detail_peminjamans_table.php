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
        Schema::create('detail_peminjamen', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_pinjam');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('kode_pinjam')->references('kode_pinjam')->on('peminjamans');
            $table->foreign('id_buku')->references('id_buku')->on('bukus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjamen');
    }
};
