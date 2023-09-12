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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('images/avatar.svg');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->foreignId('rol_id')->references('id')->on('roles')->onDelete('cascade');

            $table->foreignId('empresa_id')
                ->nullable()
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade');

            $table->foreignId('dato_personal_id')
                    ->nullable()
                   ->references('id')
                   ->on('datos_personales')
                   ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
