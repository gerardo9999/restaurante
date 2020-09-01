<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->float('precio');
            $table->integer('idProducto')->unsigned();


            $table->foreign('idProducto')->references('id')->on('producto')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('precios');
    }
}
