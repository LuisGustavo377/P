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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->time('horario');
            $table->date('data');
            $table->string('local');
            $table->text('descricao');
            // $table->unsignedBigInteger('musico_id'); 
            // $table->unsignedBigInteger('instrumento_id');
            $table->timestamps();

            // $table->foreign('musico_id')->references('id')->on('musicos');
            // $table->foreign('instrumento_id')->references('id')->on('instrumentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
