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
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('alamat')->nullable();
            $table->string('no')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jk', ['Laki-laki', 'Perempuan'])->nullable();
            $table->longText('desc')->nullable();
            $table->unsignedBigInteger('pengalaman_id')->nullable();
            $table->unsignedBigInteger('pendidikan_id')->nullable();
            $table->string('keterampilan')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pengalaman_id')->references('id')->on('pengalamans')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofiles');
    }
};