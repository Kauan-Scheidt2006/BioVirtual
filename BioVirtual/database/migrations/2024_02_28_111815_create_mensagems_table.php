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
        Schema::create('mensagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('mensagem');

            $table->unsignedBigInteger('usuario_id'); //valor não assinado de usuário
            $table->foreign('usuario_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade'); //Relacionamento com a Entidade Usuário

                
            $table->unsignedBigInteger('canal_id'); //valor não assinado de canal
            $table->foreign('canal_id')->references('id')->on('canals')
                ->onUpdate('cascade')
                ->onDelete('cascade'); //Relacionamento com a Entidade Canal

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
