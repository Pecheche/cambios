<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::get();

        $usuario = DB::table('usuario')
        ->select('usuario.id_Rol_Usuario', 'rol.id', 'rol.nombre_Rol')
        ->join('rol', 'rol.id', '=', 'usuario.id_Rol_Usuario')
        ->get();

        return view('usuarios', ['usuario' => $usuario]);
    }

    public function tablaUsuario()
    {

        $usuario = DB::table('usuario')
        ->select('usuario.id_Rol_Usuario', 'rol.id', 'rol.nombre_Rol')
        ->join('rol', 'rol.id', '=', 'usuario.id_Rol_Usuario')
        ->get();

        return view('usuarios', $usuario);
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
