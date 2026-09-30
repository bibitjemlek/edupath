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
        Schema::create('hasil_tes', function (Blueprint $table) {

            $table->id();

            // =========================
            // DATA PESERTA
            // =========================
            $table->string('nama');
            $table->string('kelas');

            // =========================
            // MATA PELAJARAN
            // =========================
            $table->json('mapel');

            // =========================
            // JAWABAN TES
            // =========================
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('q6');
            $table->string('q7');
            $table->string('q8');
            $table->string('q9');
            $table->string('q10');

            // =========================
            // HASIL REKOMENDASI
            // =========================
            $table->string('kemampuan_utama');
            $table->integer('persentase_utama');

            $table->string('kemampuan_kedua')->nullable();
            $table->integer('persentase_kedua')->nullable();

            // =========================
            // JURUSAN
            // =========================
            $table->string('jurusan_utama');
            $table->string('jurusan_planb');

            // =========================
            // WAKTU DATA DISIMPAN
            // =========================
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_tes');
    }
};
