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
        Schema::table('emprestimos', function (Blueprint $table) {
            $table->unsignedBigInteger('musico_id'); 
            $table->unsignedBigInteger('instrumento_id');
        
            $table->foreign('musico_id')->references('id')->on('musicos');
            $table->foreign('instrumento_id')->references('id')->on('instrumentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emprestimos', function (Blueprint $table) {
            //
        });
    }
};
