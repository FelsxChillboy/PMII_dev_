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
    Schema::create('anggota', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('email')->unique();
        $table->string('telepon');
        $table->string('instansi')->nullable();
        $table->text('alasan_bergabung');
        $table->string('status')->default('pending'); // pending, approved, rejected
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
