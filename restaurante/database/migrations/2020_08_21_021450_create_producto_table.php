<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion')->nullable();
            $table->string('foto');
            $table->string('nombre',50);
            $table->float('precio');

            $table->integer('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categoria')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
