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
            $table->string('alamat');
            $table->string('no');
            $table->date('tgl_lahir');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->longText('desc');
            $table->unsignedBigInteger('pengalaman_id');
            $table->unsignedBigInteger('pendidikan_id');
            $table->string('keterampilan');
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