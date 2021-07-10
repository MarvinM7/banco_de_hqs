<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTitulosFavoritosTable extends Migration {
    public function up() {
        Schema::create('usuario_titulos_favoritos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('titulo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('titulo_id')->references('id')->on('titulos')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('usuario_titulos_favoritos');
    }
}
