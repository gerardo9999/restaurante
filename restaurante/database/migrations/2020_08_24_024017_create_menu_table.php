<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha')->nullable();
            $table->boolean('estado')->default(0);
        });
       // DB::table('menu')->insert(array('id'=>1,'fecha'=>'2020/08/23'));
    }


    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
