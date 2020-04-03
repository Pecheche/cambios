<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventana extends Model
{

    protected $table = 'ventana';

    protected $fillable = ([
    'estados',
    'fecha_De_Presentacion',
    'tipo_De_Cambio',
    'responsables',
    'fecha_Inicio_Ejecucion',
    'hora_Inicio_Ejecucion',
    'hora_Fin_Ejecicion',
    'duracion_Ejecucion',
    'descripcion_Ejecucion',
    'justificacion',
    'prioridades',
    'afectaServicios',
    'servicios_Afectados',
    'afecta_Inventario',
    'modifica_Topologia_De_Red',
    'elemento',
    'descripcion',
    'riesgos_Asociados_Al_Cambio',
    'actividad_De_Cambio',
    'hora_Inicio_De_Cambio',
    'hora_Fin_De_Cambio',
    'duracion_De_Cambio',
    'responsable_De_Cambio',
    'telefono_Cambio',
    'actividad_De_Retorno',
    'hora_Inicio_De_Retorno',
    'hora_Fin_De_Retorno',
    'duracion_De_Retorno',
    'responsable_De_Retorno',
    'telefono_Retorno']);

}
