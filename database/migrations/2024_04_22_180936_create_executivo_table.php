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
        Schema::create('executivo', function (Blueprint $table) {
            $table->id();
            $table->string('nomeEmpresa', 45);
            $table->string('cnpjCpf')->unique();
            $table->string('setorAtividade');
            $table->string('cep');
            $table->string('localidade');
            $table->string('bairroDistrito');
            $table->string('logradouro');
            $table->string('numero',6);
            $table->text('missaoEmpresa');
            $table->text('valoresEmpresa');
            $table->text('visaoEmpresa');
            $table->text('fonteRecursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('executivo');
    }
};
