<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanCambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_cambio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Actividad', 50);
            $table->char('HoraInicio', 20);
            $table->char('HoraFin', 20);
            $table->char('Duracion', 20);
            $table->char('Indisponibilidad', 20);
            $table->char('NombreResponsable', 50);
            $table->char('telefono', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_cambio');
    }
}
