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
        Schema::create('regulasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->index();
            $table->date('tanggal_terbit');
            $table->string('penerbit')->index();
            $table->string('jenis')->index();
            $table->string('file')->nullable(); // path file PDF
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulasis');
    }
};
