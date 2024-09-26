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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('capa');
            $table->json('fotos'); 
            $table->string('categoria');
            $table->string('modelo');
            $table->string('ano');
            $table->string('potencia');
            $table->string('motor');
            $table->string('tipo');
            $table->string('pintura');
            $table->string('suspensao');
            $table->string('rodas');
            $table->string('modificacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
