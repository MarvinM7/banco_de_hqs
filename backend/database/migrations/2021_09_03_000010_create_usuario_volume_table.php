<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioVolumeTable extends Migration {
    public function up() {
        Schema::create('usuario_volume', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->unsigned();
            $table->integer('volume_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('quantidade')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('volume_id')->references('id')->on('volumes')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('usuario_volume_status')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('usuario_volume');
    }
}
