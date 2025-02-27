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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', '20')->unique()->nullable(false);
            $table->string('rm', '20')->unique()->nullable(false);
            $table->string('codigo_da_escola', '6')->nullable(false);
            $table->string('email', '80')->unique()->nullable(false);
            $table->string('senha', '40')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
