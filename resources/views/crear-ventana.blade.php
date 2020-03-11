@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <div class="container">

        <h2>Ventana</h2>

        <form class="bg-white shadow py-3 ancho" style="background:white" method="POST" action="">

            @csrf

            <div class="col-6">

                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                    <label for="fecha presentacion">Fecha presentación</label>
            
                    <input class="form-control border-0" placeholder="Fecha presentación" value="{{old('fecha presentacion')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="prioridad">Prioridad</label>
            
                    <input class="form-control border-0" placeholder="Prioridad" value="{{old('prioridad')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="afectacion de servicio">Afectación de servicio</label>
            
                    <input class="form-control border-0" placeholder="Afectación de servicio" value="{{old('afectacion de servicio')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="servicio afectado">Servico afectado</label>
            
                    <input class="form-control border-0" placeholder="Servico afectado" value="{{old('servicio afectado')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="riesgo">Riesgo</label>
            
                    <input class="form-control border-0" placeholder="Riesgo" value="{{old('riesgo')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="estado">Estado</label>
            
                    <input class="form-control border-0" placeholder="Estado" value="{{old('estado')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="tipo de cambio">Tipo de cambio</label>
            
                    <input class="form-control border-0" placeholder="Tipo de cambio" value="{{old('tipo de cambio')}}">
    
                </div>
            
                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">
    
                    <label for="responsable">Responsable</label>
            
                    <input class="form-control border-0" placeholder="Responsable" value="{{old('responsable')}}">
    
                </div>

            </div>
        
            <div class="col-6">

                <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="fecha ejecucion">Fecha ejecución</label>
        
                <input class="form-control border-0" placeholder="Fecha ejecución" value="{{old('fecha ejecucion')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="elemento de red">Elemento de red</label>
        
                <input class="form-control border-0" placeholder="Elemento de red" value="{{old('elemento de red')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="plan de cambio">Plan de cambio</label>
        
                <input class="form-control border-0" placeholder="Plan de cambio" value="{{old('plan de cambio')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="plan de retorno">Plan de retorno</label>
        
                <input class="form-control border-0" placeholder="Plan de retorno" value="{{old('plan de retorno')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="resultados">Resultados</label>
        
                <input class="form-control border-0" placeholder="Resultados" value="{{old('resultados')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="justificacion">Justificación</label>
        
                <input class="form-control border-0" placeholder="Justificación" value="{{old('justificacion')}}">

            </div>
        
            <div class="form-group shadow-sm tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px">

                <label for="usuario">Usuario</label>
        
                <input class="form-control border-0" placeholder="Usuario" value="{{old('usuario')}}">

            </div>

            </div>
        
            

            <form method="get" action="/prueba">
                <button type="submit; button" class="btn">regresar</button>
            </form>



        </form>


    </div>





    </div>

@endsection