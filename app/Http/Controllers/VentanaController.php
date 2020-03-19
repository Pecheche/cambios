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
        $ventana = Ventana::get();


        $ventana = DB::table('ventana')
        ->select('ventana.estados', 'estado.id', 'estado.nombre_Estado') 
        ->join('estado', 'estado.id', '=', 'ventana.estados')
        ->get();


        return view('verventana', ['ventana' => $ventana]);

    }

    public function tablaVentana()
    {
    
        $ventana = DB::table('ventana')
        ->select('ventana.estados', 'estado.id', 'estado.nombre_Estado') 
        ->join('estado', 'estado.id', '=', 'ventana.estados')
        ->get();

        return view('verventana', $ventana);

    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
