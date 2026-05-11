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
    Schema::create('surats', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

        $table->string('judul');

        $table->date('tanggal_kegiatan');

        $table->string('tempat')->nullable();

        $table->text('deskripsi')->nullable();

        $table->string('file')->nullable();

        $table->enum('status', [

            'pending',
            'disetujui',
            'ditolak'

        ])->default('pending');

        $table->timestamps();

    });
}
};
