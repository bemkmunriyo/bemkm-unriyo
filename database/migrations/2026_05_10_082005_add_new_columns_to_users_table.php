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
        Schema::table('users', function (Blueprint $table) {

            /*
            |--------------------------------------------------------------------------
            | USERNAME
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('users', 'username')) {

                $table->string('username')->unique()->after('name');

            }

            /*
            |--------------------------------------------------------------------------
            | NAMA ORGANISASI
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('users', 'nama_organisasi')) {

                $table->string('nama_organisasi')->nullable()->after('role');

            }

            /*
            |--------------------------------------------------------------------------
            | FOTO
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('users', 'foto')) {

                $table->string('foto')->nullable()->after('nama_organisasi');

            }

            /*
            |--------------------------------------------------------------------------
            | STATUS
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('users', 'status')) {

                $table->enum('status', [

                    'aktif',
                    'nonaktif'

                ])->default('aktif')->after('foto');

            }

            /*
            |--------------------------------------------------------------------------
            | LAST LOGIN
            |--------------------------------------------------------------------------
            */

            if (!Schema::hasColumn('users', 'last_login')) {

                $table->timestamp('last_login')->nullable()->after('status');

            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};