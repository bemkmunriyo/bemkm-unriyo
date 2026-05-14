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
        Schema::table('proposals', function (Blueprint $table) {

            /*
            |--------------------------------------------------------------------------
            | CEK NOMINAL
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('proposals', 'nominal')) {

                $table->bigInteger('nominal')
                      ->nullable()
                      ->after('deskripsi');

            }

            /*
            |--------------------------------------------------------------------------
            | CEK WAKTU
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('proposals', 'waktu_pelaksanaan')) {

                $table->date('waktu_pelaksanaan')
                      ->nullable()
                      ->after('nominal');

            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proposals', function (Blueprint $table) {

            if (Schema::hasColumn('proposals', 'nominal')) {

                $table->dropColumn('nominal');

            }

            if (Schema::hasColumn('proposals', 'waktu_pelaksanaan')) {

                $table->dropColumn('waktu_pelaksanaan');

            }

        });
    }
};