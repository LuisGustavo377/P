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
        Schema::create('musicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('dataNascimeto');
            $table->string('endereco');
            $table->string('email');
            $table->date('dataRegistro');
            $table->string('frequencia');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicos');
    }
};
