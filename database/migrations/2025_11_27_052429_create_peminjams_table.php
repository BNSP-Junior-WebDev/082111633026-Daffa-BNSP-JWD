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
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id('id_peminjam')->primary()->autoIncrement();
            $table->string('nama_peminjam');
            $table->dateTime('tgl_daftar')->useCurrent();
            $table->string('user_peminjam');
            $table->string('pass_peminjam');
            $table->string('foto_peminjam');
            $table->enum('status_peminjam', ['aktif', 'tidak_aktif'])->default('tidak_aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjams');
    }
};
