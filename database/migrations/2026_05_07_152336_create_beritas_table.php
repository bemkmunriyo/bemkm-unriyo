<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->longText('isi');
            $table->string('thumbnail')->nullable();
            $table->string('kategori')->nullable();

            $table->foreignId('penulis_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};