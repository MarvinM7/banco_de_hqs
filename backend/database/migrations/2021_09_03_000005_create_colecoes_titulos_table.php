<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColecoesTitulosTable extends Migration {
    public function up() {
        Schema::create('colecoes_titulos', function (Blueprint $table) {
            $table->id();
            $table->integer('colecao_id');
            $table->integer('titulo_id');
            $table->integer('ordem');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('colecao_id')->references('id')->on('colecoes')->onDelete('cascade');
            $table->foreign('titulo_id')->references('id')->on('titulos')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('colecoes_titulos');
    }
}
