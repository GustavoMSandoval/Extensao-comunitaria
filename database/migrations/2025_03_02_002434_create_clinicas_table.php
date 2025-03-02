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
        Schema::create('clinicas', function (Blueprint $table) {
            $table->id();
            $table->string('primeira_imagem');
            $table->string('segunda_imagem')->nullable();
            $table->string('terceira_imagem')->nullable();
            $table->string('nome_clinica');
            $table->string('rua_clinica');
            $table->string('telefone_clinica', 11);
            $table->time('hora_abertura_clinica');
            $table->time('hora_fechamento_clinica');
            $table->boolean('situacao_clinica');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinicas');
    }
};
