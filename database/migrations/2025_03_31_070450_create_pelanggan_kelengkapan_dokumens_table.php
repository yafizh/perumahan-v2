<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pelanggan_kelengkapan_dokumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan');
            $table->string('ktp')->nullable();
            $table->string('ktp_status')->nullable();
            $table->text('ktp_keterangan')->nullable();
            $table->string('slip_gaji')->nullable();
            $table->string('slip_gaji_status')->nullable();
            $table->text('slip_gaji_keterangan')->nullable();
            $table->string('buku_rekening')->nullable();
            $table->string('buku_rekening_status')->nullable();
            $table->text('buku_rekening_keterangan')->nullable();
            $table->string('npwp')->nullable();
            $table->string('npwp_status')->nullable();
            $table->text('npwp_keterangan')->nullable();
            $table->string('ktp_pasangan')->nullable();
            $table->string('ktp_pasangan_status')->nullable();
            $table->text('ktp_pasangan_keterangan')->nullable();
            $table->string('surat_nikah_cerai')->nullable();
            $table->string('surat_nikah_cerai_status')->nullable();
            $table->text('surat_nikah_cerai_keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pelanggan_kelengkapan_dokumen');
    }
};
