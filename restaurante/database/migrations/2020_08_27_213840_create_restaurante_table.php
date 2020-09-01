<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteTable extends Migration
{
    public function up()
    {
        Schema::create('restaurante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('direccion');

            $table->integer('idTelefono')->unsigned();
            $table->integer('idFoto')->unsigned();
            $table->integer('idLogo')->unsigned();

            $table->foreign('idTelefono')->references('id')->on('telefono')->onDelete('cascade');
            $table->foreign('idFoto')->references('id')->on('foto')->onDelete('cascade');

            $table->integer('idDescripcion')->unsigned();
            $table->foreign('iddescripcion')->references('id')->on('descripcion')->onDelete('cascade');

            $table->foreign('idLogo')->references('id')->on('logo')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurante');
    }
}
