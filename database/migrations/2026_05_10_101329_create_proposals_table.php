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
    Schema::create('proposals', function (Blueprint $table) {

        $table->id();

        /*
        |--------------------------------------------------------------------------
        | USER ORGANISASI
        |--------------------------------------------------------------------------
        */

        $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

        /*
        |--------------------------------------------------------------------------
        | DATA PROPOSAL
        |--------------------------------------------------------------------------
        */

        $table->string('judul');

        $table->text('deskripsi')->nullable();

        $table->string('file')->nullable();

        $table->enum('status', [

            'pending',
            'disetujui',
            'ditolak',
            'revisi'

        ])->default('pending');

        $table->timestamps();

    });
}
};
