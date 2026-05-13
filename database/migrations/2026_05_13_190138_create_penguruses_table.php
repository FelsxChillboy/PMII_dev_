<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jabatan');
            $table->string('foto_url')->nullable(); // Link untuk foto pengurus
            $table->string('instagram_url')->nullable(); // Link sosmed
            $table->string('email')->unique();
            $table->boolean('is_active')->default(true); // Status aktif pengurus
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengurus');
    }
};
