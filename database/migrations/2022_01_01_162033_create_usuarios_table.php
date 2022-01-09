<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellidos',50);
            $table->string('user_name',40)->unique();
            $table->string('email',100)->unique();
            $table->string('contraseña');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}