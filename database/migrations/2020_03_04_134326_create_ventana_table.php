<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('FechaPresentacion', 25);
            $table->char('Prioridad', 6);
            $table->char('AfectacionServicio', 3);
            $table->char('ServicioAfectado', 30);
            $table->char('Riesgos', 120);
            $table->unsignedBigInteger('idEstado');
            $table->unsignedBigInteger('idTipoCambio');
            $table->unsignedBigInteger('idResponsable');
            $table->unsignedBigInteger('idFechaEjecucion');
            $table->unsignedBigInteger('idElementoRed');
            $table->unsignedBigInteger('idPlanCambio');
            $table->unsignedBigInteger('idPlanRetorno');
            $table->unsignedBigInteger('idResultados');
            $table->unsignedBigInteger('idJustificacion');
            $table->unsignedBigInteger('idUsuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventana');
    }
}
