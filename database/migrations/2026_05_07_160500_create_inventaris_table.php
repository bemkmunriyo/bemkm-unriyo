<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventaris', function (Blueprint $table) {

            $table->id();

            $table->string('nama_barang');

            $table->text('deskripsi')->nullable();

            $table->integer('stok');

            $table->integer('biaya_pemeliharaan')->default(0);

            $table->string('kondisi')->default('baik');

            $table->string('gambar')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};