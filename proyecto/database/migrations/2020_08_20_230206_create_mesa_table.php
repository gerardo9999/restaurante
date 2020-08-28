<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacidad');
            $table->text('descripcion');
            $table->boolean('ocupado')->default(1);
            $table->string('ubicacion',50);
        });

        DB::table('mesa')->insert(array('capacidad'=>4,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector A'));
        DB::table('mesa')->insert(array('capacidad'=>2,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector A'));
        DB::table('mesa')->insert(array('capacidad'=>3,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector A'));
        DB::table('mesa')->insert(array('capacidad'=>6,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector A'));
        DB::table('mesa')->insert(array('capacidad'=>6,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector B'));
        DB::table('mesa')->insert(array('capacidad'=>5,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector B'));
        DB::table('mesa')->insert(array('capacidad'=>2,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector B'));
        DB::table('mesa')->insert(array('capacidad'=>1,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector C'));
        DB::table('mesa')->insert(array('capacidad'=>1,'descripcion'=>'sin descripcion','ocupado'=>1,'ubicacion'=>'Sector C'));
    }


    public function down()
    {
        Schema::dropIfExists('mesa');
    }
}
