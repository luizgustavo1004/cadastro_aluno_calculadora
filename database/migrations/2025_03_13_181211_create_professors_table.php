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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 20)->nullable(false)->unique();
            $table->string('email', 80)->nullable(false)->unique();
            $table->string('cbo', 10)->nullable(false)->unique();
            $table->string('codigo_da_escola', 3)->nullable(false);
            $table->string('senha', 40)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
