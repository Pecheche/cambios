    @extends('layout')

    @section('title', 'Cambios')

    @section('pruebas')

    <h1 align="center">Ventana</h1>

    <form method="POST">

        @csrf

        <div class="card">

            <div class="card-body">
    
                <div>
    
                    <table align="center" class="table-responsive-lg table-bordered table-hover">
    
                        <thead class="thead">
        
                            <tr align="center" width="120" height="30">
                                <th>Número de ventana</th>
                                <th>Estado</th>
                                <th>Fecha inicio</th>
                                <th>Hora inicio</th>
                                <th>Hora fin</th>
                                <th>Responsable</th>
    
                            </tr>
        
                        </thead>
        
                        <tbody>
                            
                            
                            @foreach ($ventana as $ventanaItem)
        
                            <tr height="30" align="center">
        
                                <td width="150">{{ $ventanaItem->id}}</td>
                                <td width="150">{{ $ventanaItem->nombre_Estado}}</td>
                                <td width="150">{{ $ventanaItem->fecha_Inicio_Ejecucion }}</td>
                                <td width="150">{{ $ventanaItem->hora_Inicio_Ejecucion }}</td>
                                <td width="150">{{ $ventanaItem->hora_Fin_Ejecucion }}</td>
                                <td width="150">{{ $ventanaItem->nombre_Responsable }}</td>



                            </tr>
        
                            @endforeach
        
        
        
                        </tbody>
        
                    </table>
    
                </div>
    
            </div>
    
        </div>
    
    </form>

@endsection

</body>
</html>
