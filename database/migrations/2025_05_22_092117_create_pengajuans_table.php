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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();    
            $table->foreignId('user_id')->constrained()->onDelete('cascade');   
            $table->string('nama');
            $table->string('nik', 16); // Sesuai standar NIK
            $table->text('alamat');
            $table->string('email')->nullable(); // opsional jika tak semua pengajuan perlu email
            $table->enum('jenis_surat', [
                'Surat Keterangan Miskin', 
                'Surat Keterangan Domisili', 
                'Surat Pengantar SKCK',
                'Surat Keterangan Usaha',
                'Surat Kematian'
            ]);
            $table->string('dokumen_pendukung')->nullable(); // simpan path file upload
            $table->enum('status', ['Menunggu', 'Diproses', 'Selesai', 'Ditolak'])->default('Menunggu');
            $table->string('dokumen_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
