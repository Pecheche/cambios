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
            $table->char('documento_Usuario', 25);
            $table->char('nombres_Usuario', 50);
            $table->char('apellidos_Usuario_Usuario', 50);
            $table->char('correo_Usuario', 100);
            $table->char('telefono_Usuario', 25);
            $table->unsignedBigInteger('id_Rol_Usuario');
            $table->char('usuario_Usuario', 15);
            $table->char('contraseña_Usuario', 50);
            $table->char('estado_Usuario', 25);


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
