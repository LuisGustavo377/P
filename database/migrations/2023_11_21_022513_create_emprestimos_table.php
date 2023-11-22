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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('dataEmprestimo');
            $table->date('dataDevolucao');
            $table->timestamps();

            // $table->foreign('instrumento_id')->references('id')->on('instrumentos');
            // $table->foreign('musico_id')->references('id')->on('musicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
