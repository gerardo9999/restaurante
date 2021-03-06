<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{

    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',100)->nullable();
            $table->string('apellidos',100);
            $table->string('login',100);
            $table->string('password',100);
            $table->string('empresa',100)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('email',50);
            $table->string('estado')->default(1);

        });
       // DB::table('cliente')->insert(array('id'=>1,'nombres'=>'Elena','apellidos'=>'Sanchez Suarez','login'=>'elena8783','password'=>'23456789','empresa'=>'ejemplo','telefono'=>'78164812','direccion'=>'C/Bolivar','email'=>'elena99@gmail.com','estado'=>'activado'));
    }


    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
