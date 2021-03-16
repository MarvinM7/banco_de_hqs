<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioVolumesFavoritosTable extends Migration {
    public function up() {
        Schema::create('usuario_volumes_favoritos', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->unsigned();
            $table->integer('volume_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('volume_id')->references('id')->on('volumes')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('usuario_volumes_favoritos');
    }
}
