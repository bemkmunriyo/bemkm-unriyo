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
        Schema::table('inventaris', function (Blueprint $table) {

            /*
            |--------------------------------------------------------------------------
            | DESKRIPSI BARANG
            |--------------------------------------------------------------------------
            */

            $table->text('deskripsi')->nullable();

            /*
            |--------------------------------------------------------------------------
            | GAMBAR BARANG
            |--------------------------------------------------------------------------
            */

            $table->string('gambar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventaris', function (Blueprint $table) {

            $table->dropColumn('deskripsi');

            $table->dropColumn('gambar');

        });
    }
};