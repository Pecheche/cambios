@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <h1 align="center">Ventana</h1>

    <div class="table-responsive">

        <table border="1" align="center" class="table table-responsive-lg">

            <thead> 
    
                <td align="center">id</td>

                <td align="center">Fecha de presentación</td>
    
                <td align="center">Prioridad</td>
    
                <td align="center">Afectación</td>

                <td align="center">Servicio afectado</td>

                <td align="center">Riesgo</td>

                <td align="center">Estado</td>

                <td align="center">Tipo de cambio</td>

                <td align="center">Responsable</td>
    
                <td align="center">Fecha de ejecución</td>

                <td align="center">Elemento de red</td>

                <td align="center">Plan de cambio</td>

                <td align="center">Plan de retorno</td>

                <td align="center">Resultado</td>

                <td align="center">Justificación</td>

                <td align="center">Usuario</td>
    
            </thead>
    
        </table>

    </div>



        <form style="padding:bottom" align="center" method="get" action="/prueba" >
            <button type="submit; button" class="btn" style="padding:10px">regresar</button>
        </form>



@endsection
