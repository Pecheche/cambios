<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechaEjecucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha_ejecucion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('FechaInicio', 20);
            $table->char('HoraInicio', 20);
            $table->char('HoraFin', 20);
            $table->char('Duracion', 20);
            $table->char('Indisponibilidad', 20);
            $table->char('Descripcion', 100);
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fecha_ejecucion');
    }
}
