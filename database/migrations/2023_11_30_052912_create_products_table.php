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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('harga');
            $table->string('tipe');
            $table->string('thumbnail');
            $table->string('gambar');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('tipe_mesin');
            $table->string('jumlah_silinder');
            $table->string('diameter');
            $table->string('perbandingan_kompresi');
            $table->string('daya_maximum');
            $table->string('torsi_maximum');
            $table->string('starter');
            $table->string('sistem_pelumasan');
            $table->string('kapasitas_oli_mesin');
            $table->string('sistem_bahan_bakar');
            $table->string('volume_silinder');
            $table->string('tipe_kopling');
            $table->string('pola_transmisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
