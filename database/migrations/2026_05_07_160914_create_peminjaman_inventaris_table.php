<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman_inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->foreignId('inventaris_id')->constrained('inventaris')->onDelete('cascade');
            $table->integer('jumlah');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman_inventaris');
    }
};