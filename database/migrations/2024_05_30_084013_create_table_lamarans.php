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
        Schema::create('table_lamarans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->string('Email');
            $table->string('Telepon');
            $table->string('Surat_Lamaran');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->timestamps();

            $table->foreign('pekerjaan_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lamarans');
    }
};
