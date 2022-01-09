<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('director');
            $table->integer('año');
            $table->longText('sinopsis');
            $table->string('imagen')->default('not_found.png');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}