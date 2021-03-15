<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacoesTable extends Migration {
    public function up() {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->unsigned();
            $table->string('texto');
            $table->integer('tipo_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('resposta');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('solicitacao_tipos')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('solicitacao_status')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('solicitacoes');
    }
}
