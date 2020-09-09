<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
    }


    public function down()
    {
        Schema::dropIfExists('mesa');
    }
}
