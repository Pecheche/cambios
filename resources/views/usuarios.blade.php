<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layout')

    @section('title', 'Cambios')

    @section('pruebas')

    <h1 align="center">Usuarios</h1>

    <div class="card">

        <div class="card-body">

            <table class="table-responsive table-bordered table-hover" id=listaVentana>

                <thead class="thead">

                    <tr>

                        <th>Número Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th>Usuario</th>
                        <th>Estado</th>


                    </tr>

                </thead>

                <tbody>
                    
                    
                    @foreach ($usuario as $usuarioItem)

                    <tr>

                        <td align="center">{{ $usuarioItem->id}}</td>
                        <td align="center">{{ $usuarioItem->nombres_Usuario }}</td>
                        <td align="center">{{ $usuarioItem->apellidos_Usuario_Usuario}}</td>
                        <td align="center">{{ $usuarioItem->documento_Usuario }}</td>
                        <td align="center">{{ $usuarioItem->correo_Usuario }}</td>
                        <td align="center">{{ $usuarioItem->telefono_Usuario }}</td>
                        <td align="center">{{ $usuarioItem->nombre_Rol }}</td>
                        <td align="center">{{ $usuarioItem->usuario_Usuario }}</td>
                        <td align="center">{{ $usuarioItem->estado }}</td>

                    </tr>

                    @endforeach



                </tbody>

            </table>

        </div>

    </div>



        <form style="padding:bottom" align="center" method="get" action="/prueba" >
            <button type="submit; button" class="btn" style="padding:10px">regresar</button>
        </form>

    @endsection
    
</body>
</html>
