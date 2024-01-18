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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->char('npsn',8);
            $table->unsignedBigInteger('kode_kelas');
            $table->char('nama_siswa',50);
            $table->integer('no_absen');
            $table->string('gambar_siswa',255);
            $table->string('pesan',255);
            $table->string('deskripsi',255);

            $table->foreign('npsn')->on('sekolah')->references('npsn')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kode_kelas')->on('kelas')->references('kode_kelas')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
