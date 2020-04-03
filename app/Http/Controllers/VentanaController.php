<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventana;
use Illuminate\Support\Facades\DB;

class VentanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $ventana = DB::table('ventana')
        ->select('ventana.id',
        'ventana.estados',
        'estado.id',
        'estado.nombre_Estado',
        'fecha_Inicio_Ejecucion',
        'hora_Inicio_Ejecucion',
        'hora_Fin_Ejecucion',
        'ventana.responsables',
        'responsable.id',
        'responsable.nombre_Responsable'
        ) 
        ->join('estado', 'estado.id', '=', 'ventana.estados')
        ->join('responsable', 'responsable.id', '=', 'ventana.responsables')
        ->get();

        



        return view('verventana')
        ->with('ventana', $ventana);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        Ventana::insert([

            // primero va la tabla de la base de datos y luego el nombre que trae el input en la vista

            'estados' => request()->estado,
            'fecha_De_Presentacion' => request()->fecha_De_Presentacion,
            'tipo_De_Cambio' => request()->tipo_de_cambio,
            'responsables' => request()->responsables,
            'fecha_Inicio_Ejecucion' => request()->fecha_Inicio_Ejecucion,
            'hora_Inicio_Ejecucion' => request()->hora_Inicio_Ejecucion,
            'hora_Fin_Ejecucion' => request()->hora_Fin_Ejecucion,
            'duracion_Ejecucion' => request()->duracion_Ejecucion,
            'descripcion_Ejecución' => request()->descripcion_Ejecución,
            'justificacion' => request()->justificacion,
            'prioridades' => request()->prioridades,
            'afectaServicios' => request()->afectaServicios,
            'servicios_Afectados' => request()->servicios_Afectados,
            'afecta_Inventario' => request()->afecta_Inventario,
            'modifica_Topologia_De_Red' => request()->modifica_Topologia_De_Red,
            'elemento' => request()->elemento,
            'descripcion' => request()->descripcion_del_elemento,
            'riesgos_Asociados_Al_Cambio' => request()->riesgos_Asociados_Al_Cambio,
            'actividad_De_Cambio' => request()->actividad_De_Cambio,
            'hora_Inicio_De_Cambio' => request()->hora_Inicio_De_Cambio,
            'hora_Fin_De_Cambio' => request()->hora_Fin_De_Cambio,
            'duracion_De_Cambio' => request()->duracion_De_Cambio,
            'responsable_De_Cambio' => request()->responsable_De_Cambio,
            'telefono_Cambio' => request()->telefono_Cambio,
            'actividad_De_Retorno' => request()->actividad_De_Retorno,
            'hora_Inicio_De_Retorno' => request()->hora_Inicio_De_Retorno,
            'hora_Fin_De_Retorno' => request()->hora_Fin_De_Retorno,
            'duracion_De_Retorno' => request()->duracion_De_Retorno,
            'responsable_De_Retorno' => request()->responsable_De_Retorno,
            'telefono_Retorno' => request()->telefono_Retorno

            ]);

;

            return redirect()->route('verventana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create()
    {

        $estado = DB::table('estado')
        ->select(
            'estado.id',
            'estado.nombre_Estado'
        ) 
        ->get();

        $tipocambio = DB::table('tipocambio')
        ->select(
            'tipocambio.id',
            'tipocambio.nombre_Tipo_De_Cambio'
        )
        ->get();

        $responsable = DB::table('responsable')
        ->select(
            'responsable.id',
            'responsable.nombre_Responsable'
        )
        ->get();

        $prioridad = DB::table('prioridad')
        ->select(
            'prioridad.id',
            'prioridad.nombre_Prioridad'
        )
        ->get();

        $afectaservicio = DB::table('afectaservicio')
        ->select(
            'afectaservicio.id',
            'afectaservicio.nombre_Afecta_Servicio'
        )
        ->get();

        $afectainventario = DB::table('afectainventario')
        ->select(
            'afectainventario.id',
            'afectainventario.nombre_Afecta_Inventario'
        )
        ->get();

        $modificatopologia = DB::table('modificatopologia')
        ->select(
            'modificatopologia.id',
            'modificatopologia.nombre_Modifica_Topologia'
        )
        ->get();

        $responsablecambio = DB::table('responsable')
        ->select(
            'responsable.id',
            'responsable.nombre_Responsable'
        )
        ->get();

        $responsableretorno = DB::table('responsable')
        ->select(
            'responsable.id',
            'responsable.nombre_Responsable'
        )
        ->get();


        return view('crear-ventana') 
        ->with('estado', $estado)
        ->with('tipocambio', $tipocambio)
        ->with('responsable', $responsable)
        ->with('prioridad', $prioridad)
        ->with('afectaservicio', $afectaservicio)
        ->with('afectainventario', $afectainventario)
        ->with('modificatopologia', $modificatopologia)
        ->with('responsablecambio', $responsablecambio)
        ->with('responsableretorno', $responsableretorno)
        ;
    }
}
