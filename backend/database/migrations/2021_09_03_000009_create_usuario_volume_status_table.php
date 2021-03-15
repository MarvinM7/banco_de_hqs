<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioVolumeStatusTable extends Migration {
    public function up() {
        Schema::create('usuario_volume_status', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('usuario_volume_status');
    }
}
