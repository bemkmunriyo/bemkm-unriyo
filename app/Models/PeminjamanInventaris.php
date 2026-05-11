<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade');

            $table->foreignId('inventaris_id')
                    ->constrained('inventaris')
                    ->onDelete('cascade');

            $table->integer('jumlah');

            $table->date('tanggal_pinjam');

            $table->date('tanggal_kembali');

            $table->text('keperluan');

            $table->enum('status', [
                'pending',
                'disetujui',
                'ditolak',
                'dikembalikan'
            ])->default('pending');

            $table->integer('total_biaya')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};