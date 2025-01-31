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
        Schema::create('log_aktivitas', function (Blueprint $table) {
            $table->id();
            $table->string('tipe'); // Contoh: Login, Tugas Dibuat, Tugas Selesai
            $table->string('aktivitas'); // Contoh: "Tugas 'X' dibuat", "Proyek 'Y' selesai"
            $table->foreignId('karyawan_id')->constrained('karyawans')->onDelete('cascade');
            $table->timestamp('waktu_aktivitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_aktivitas');
    }
};
