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
        Schema::create('guru', function (Blueprint $table) {
            $table->id('kode_guru');
            $table->char('npsn',8);
            $table->integer('kode_kelas');
            $table->char('nama_guru',50);
            $table->string('gambar_guru',255);
            $table->string('pesan',255);


            $table->foreign('npsn')->on('sekolah')->references('npsn')->cascadeOnDelete()->cascadeOnUpdate();
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
