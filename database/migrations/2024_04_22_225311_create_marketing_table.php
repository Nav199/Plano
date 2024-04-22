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
        Schema::create('marketing', function (Blueprint $table) {
            $table->id();
            $table->string('produto',40);
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('estrategia',100);
            $table->string('comercializacao',100);
            $table->string('localizacao',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing');
    }
};
