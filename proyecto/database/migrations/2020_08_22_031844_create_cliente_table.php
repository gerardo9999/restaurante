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
        DB::table('cliente')->insert(array('nombres'=>'Elena','apellidos'=>'Sanchez Suarez','login'=>'elena8783','password'=>'123456789','empresa'=>'FINOR','telefono'=>'781648881','direccion'=>'C/Bolivar','email'=>'elena99@gmail.com','estado'=>1));
        DB::table('cliente')->insert(array('nombres'=>'Carolina','apellidos'=>'Alba Mendez','login'=>'carolina77','password'=>'123456789','empresa'=>'FINOR','telefono'=>'78166612','direccion'=>'C/Independencia','email'=>'carolina77@gmail.com','estado'=>1));
        DB::table('cliente')->insert(array('nombres'=>'Eldy','apellidos'=>'Maldonado Cuellar','login'=>'eldymacu23','password'=>'123456789','empresa'=>'FINOR','telefono'=>'78444812','direccion'=>'C/Manchego','email'=>'eldymacu23@gmail.com','estado'=>1));
        DB::table('cliente')->insert(array('nombres'=>'Carlos','apellidos'=>'Arce Duran','login'=>'carlos19','password'=>'123456789','empresa'=>'FINOR','telefono'=>'78164812','direccion'=>'C/Bolivar','email'=>'carlos99@gmail.com','estado'=>1));
    }


    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
