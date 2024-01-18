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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('kode_kelas');
            $table->char('npsn',8);
            $table->unsignedBigInteger('kode_jurusan');
            $table->unsignedBigInteger('kode_guru');
            $table->string('gambar_kelas',255);
            $table->string('keterangan',255);

            $table->foreign('npsn')->on('sekolah')->references('npsn')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kode_jurusan')->on('jurusan')->references('kode_jurusan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kode_guru')->on('guru')->references('kode_guru')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
