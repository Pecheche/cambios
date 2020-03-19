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
            $table->unsignedBigInteger('estados');
            $table->date('fecha_De_Presentacion');
            $table->unsignedBigInteger('tipo_De_Cambio');
            $table->unsignedBigInteger('responsables');
            $table->date('fecha_Inicio_Ejecucion');
            $table->time('hora_Inicio_Ejecucion');
            $table->time('hora_Fin_Ejecucion');
            $table->time('duración_Ejecucion');
            $table->char('descripcion_Ejecución', 250);
            $table->char('justificacion', 250);
            $table->unsignedBigInteger('prioridades');
            $table->unsignedBigInteger('afectaServicios');
            $table->char('servicios_Afectados', 250);
            $table->unsignedBigInteger('afecta_Inventario');
            $table->unsignedBigInteger('modifica_Topologia_De_Red');
            $table->char('elemento', 250);
            $table->char('descripcion', 250);
            $table->char('riesgos_Asociados_Al_Cambio', 250);
            $table->char('actividad_De_Cambio', 250);
            $table->time('hora_Inicio_De_Cambio');
            $table->time('hora_Fin_De_Cambio');
            $table->time('duracion_De_Cambio');
            $table->unsignedBigInteger('responsable_De_Cambio');
            $table->char('telefono_Cambio', 25);
            $table->char('actividad_De_Retorno', 250);
            $table->time('hora_Inicio_De_Retorno');
            $table->time('hora_Fin_De_Retorno');
            $table->time('duracion_De_Retorno');
            $table->unsignedBigInteger('responsable_De_Retorno');
            $table->char('telefono_Retorno', 25);




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
