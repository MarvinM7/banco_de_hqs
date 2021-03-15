<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolumesTable extends Migration {
    public function up() {
        Schema::create('volumes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('preco', 8, 2);
            $table->integer('titulo_id')->unsigned();
            $table->string('capa')->nullable();
            $table->date('data_lancamento')->nullable();
            $table->string('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('titulo_id')->references('id')->on('titulos')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('volumes');
    }
}
