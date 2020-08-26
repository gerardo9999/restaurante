<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteTable extends Migration
{

    public function up()
    {
        Schema::create('restaurante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('nosotros');
            $table->string('slogan1')->nullable();
            $table->string('foto1')->nullable();
            $table->string('slogan2')->nullable();
            $table->string('foto2')->nullable();

            $table->string('logo');
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('direccion');
            $table->string('email');
            $table->text('descripcion');
        });

        DB::table('restaurante')->insert(array(
            'nombre'=>'restaurant',
            'nosotros'=>'Una descripcion sobre lo que somos y lo que hacemos',
            'slogan1'=>'Slogan 1 de la empresa',
            'foto1'=>'distribution/img/hero-bg03.jpg',
            'slogan2'=>'Slogan 2 de la empresa',
            'foto2'=>'distribution/img/hero-bg02.jpg',

            'logo'=>'distribution/img/logo.png',
            'telefono1'=>'327686878',
            'telefono2'=>'767637864',
            'direccion'=>'Calle Independencia',
            'email'=>'restaurant@gmail.com',
            'descripcion'=>'Descripcion breve de la empresa'
        ));
    }



    public function down()
    {
        Schema::dropIfExists('restaurante');
    }
}
