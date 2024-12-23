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
        Schema::create('caixa_minimo', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_plano'); 
            $table->decimal('necessidade_estoque', 20, 10)->default(0); // Ajustado para maior precisão
            $table->decimal('capital_giro', 20, 10); // Ajustado para maior precisão
            $table->decimal('estoque_inicial', 20, 10); // Ajustado para maior precisão
            $table->timestamps();
            
            $table->foreign('id_plano')
                ->references('id')
                ->on('plano_negocios')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caixa_minimo');
    }
};
