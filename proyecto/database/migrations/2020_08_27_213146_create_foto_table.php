<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{

    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('slogan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto');
    }
}
