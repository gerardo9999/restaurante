<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->date('fechaentrega');
            $table->time('horaentrega');
            $table->string('glosa');
            $table->float('montototal');
            $table->string('repartidor');
            $table->boolean('estado');

            $table->integer('idUsuario')->unsigned();
            $table->integer('idCliente')->unsigned();
            $table->integer('idRepartidor')->unsigned();
            $table->integer('idUbicaion')->unsigned();


            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('cliente')->onDelete('cascade');
            $table->foreign('idRepartidor')->references('id')->on('repartidor')->onDelete('cascade');
            $table->foreign('idUbicaion')->references('id')->on('ubicacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
