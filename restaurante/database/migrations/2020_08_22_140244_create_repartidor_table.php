<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class CreateRepartidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidor', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre',100)->nullable();
            $table->string('apellidos',100);
            $table->string('login',100);
            $table->string('password',100);
            $table->string('cedulaID',10);
            $table->string('telefono',20);
            $table->string('direccion',100);
        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repartidor');
    }
}
