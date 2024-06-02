<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaransTable extends Migration
{
    public function up()
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pekerjaan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->text('surat_lamaran');
            $table->timestamps();

            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lamarans');
    }
}