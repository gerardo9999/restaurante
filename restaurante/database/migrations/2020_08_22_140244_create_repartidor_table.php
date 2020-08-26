<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
       /// DB::table('repartidor')->insert(array('id'=>1,'nombres'=>'Gabriela','apellidos'=>'Osorio Mancilla','login'=>'gaby','password'=>'123','cedulaID'=>'9612873','telefono'=>'69423157','direccion'=>'C/Arenales'));
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
