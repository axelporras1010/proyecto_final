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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profesor_id'); 
            $table->foreign('profesor_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->string('dia_semana'); 
            $table->string('descripcion');
            $table->time('hora_inicio'); 
            $table->time('hora_fin'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};

