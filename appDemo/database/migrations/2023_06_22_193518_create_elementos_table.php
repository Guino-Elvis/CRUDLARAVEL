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
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->string('numserie');
            $table->string('cantidad');
            $table->string('baja');
            $table->string('fechabaja');
            $table->string('motivobaja');
            $table->string('codigobarra');
            $table->unsignedBigInteger('ubicacions_id');
            $table->foreign('ubicacions_id')->references('id')->on('ubicacions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elementos');
    }
};
