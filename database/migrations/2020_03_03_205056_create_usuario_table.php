<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idDependencia');
            $table->char('Documento', 25);
            $table->char('Nombres', 50);
            $table->char('Apellidos', 50);
            $table->char('Correo', 100);
            $table->unsignedBigInteger('idRol');
            $table->char('Usuario', 15);
            $table->char('Contraseña', 50);
            $table->unsignedBigInteger('Estado');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
