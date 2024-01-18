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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->char('npsn', 8)->nullable(false)->primary();
            $table->string('nama_sekolah', 50);
            $table->string('sejarah_singkat', 255);
            $table->string('kata_pengantar', 255);
            $table->unsignedInteger('angkatan');
            $table->string('julukan_sekolah', 50);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
