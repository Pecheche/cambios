    @extends('layout')

    @section('title', 'Cambios')

    @section('pruebas')

    <h1 align="center">Usuarios</h1>

    <div class="card">

        <div class="card-body">

            <div>

                <table align="center" class="table-responsive-lg table-bordered table-hover border-2">

                    <thead class="thead">
    
                        <tr align="center" width="120" height="30">
                            <th >ID Usuario</th>
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
    
                        <tr height="30">
                            <td align="center"> {{ $usuarioItem->id}} </td>
                            <td width="150" align="center"> {{ $usuarioItem->nombres_Usuario }} </td>
                            <td width="200" align="center"> {{ $usuarioItem->apellidos_Usuario_Usuario}} </td>
                            <td width="150" align="center"> {{ $usuarioItem->documento_Usuario }} </td>
                            <td width="250" align="center"> {{ $usuarioItem->correo_Usuario }} </td>
                            <td width="150" align="center"> {{ $usuarioItem->telefono_Usuario }} </td>
                            <td width="150" align="center"> {{ $usuarioItem->nombre_Rol}} </td>
                            <td width="150" align="center"> {{ $usuarioItem->usuario_Usuario }} </td>
                            <td width="150" align="center"> {{ $usuarioItem->estado_Usuario}} </td>
                        </tr>
    
                        @endforeach
    
    
                    </tbody>
    
                </table>

                <form style="padding:bottom" align="center" method="get" action="/prueba" >
                    <button type="submit; button" class="btn" style="padding:10px">regresar</button>
                </form>

            </div>

        </div>

    </div>





    @endsection
    
</body>
</html>
