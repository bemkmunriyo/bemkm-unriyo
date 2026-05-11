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
    Schema::create('peminjaman_inventaris', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

        $table->string('nama_barang');

        $table->integer('jumlah');

        $table->date('tanggal_pinjam');

        $table->date('tanggal_kembali');

        $table->enum('status', [

            'pending',
            'disetujui',
            'ditolak'

        ])->default('pending');

        $table->timestamps();

    });
}
};