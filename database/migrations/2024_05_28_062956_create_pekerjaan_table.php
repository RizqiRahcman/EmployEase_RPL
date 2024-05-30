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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id()->unsigned()->unique();
            $table->string('posisi');
            $table->longText('desc_pekerjaan');
            $table->unsignedBigInteger('kota_id');
            $table->string('alamat');
            $table->string('tipe');
            $table->string('kategori');
            $table->string('gaji');
            $table->string('slug');
            $table->unsignedBigInteger('perusahaan_id');
            $table->timestamps();

            $table->foreign('perusahaan_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaans');
    }
};