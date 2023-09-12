<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->boolean('status')->default(false);
            $table->foreignId('permiso_id')->references('id')->on('permisos')->onDelete('cascade');
            $table->foreignId('rol_id')->references('id')->on('roles')->onDelete('cascade');

            $table->primary(['permiso_id','rol_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso_rol');
    }
};
