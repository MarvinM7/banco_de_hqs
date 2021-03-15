<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulosTable extends Migration {
    public function up() {
        Schema::create('titulos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('editora_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('editora_id')->references('id')->on('editoras')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('titulo_status')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('titulos');
    }
}
