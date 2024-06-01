<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('provinsis', function (Blueprint $table) {
            $table->id()->unsigned()->unique();
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('kotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('provinsi_id');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotas');
        Schema::dropIfExists('provinsis');
    }
};
