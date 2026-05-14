<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('aspirasis', function (Blueprint $table) {

            $table->text('tanggapan')->nullable();

            $table->enum(
                'prioritas',
                ['Rendah', 'Sedang', 'Tinggi']
            )->default('Sedang');

        });
    }

    public function down(): void
    {
        Schema::table('aspirasis', function (Blueprint $table) {

            $table->dropColumn('tanggapan');
            $table->dropColumn('prioritas');

        });
    }
};