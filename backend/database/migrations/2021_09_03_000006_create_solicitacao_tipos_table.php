<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaoTiposTable extends Migration {
    public function up() {
        Schema::create('solicitacao_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('solicitacao_tipos');
    }
}
