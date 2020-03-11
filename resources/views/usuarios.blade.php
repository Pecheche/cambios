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

    <div class="table-responsive">

        <table border="1" align="center" class="table table-responsive-sm">

            <thead> 
    
                <td align="center">id</td>
    
                <td align="center">Documento</td>
    
                <td align="center">Nombres</td>
    
                <td align="center">Apellidos</td>
    
                <td align="center">Correo</td>
            
                <td align="center">Rol</td>
    
                <td align="center">Usuario</td>
    
                <td align="center">Contraseña</td>

                <td align="center">Estadio</td>
    
            </thead>
    
        </table>

    </div>



        <form style="padding:bottom" align="center" method="get" action="/prueba" >
            <button type="submit; button" class="btn" style="padding:10px">regresar</button>
        </form>

    @endsection
    
</body>
</html>
