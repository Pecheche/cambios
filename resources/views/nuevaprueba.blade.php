@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <div class="container" align="center">

        <h2 style="text-align:center">Ventana</h2>

        <form class="bg-white shadow py-3 " style="background:white;"  method="POST" action="">

            @csrf



    

                    <div class="row">

                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <label for="fecha presentacion">Fecha presentación</label>
                        
                                <input type="text" class="form-control" placeholder="Fecha presentación" value="{{old('fecha presentacion')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="prioridad">Prioridad</label>
                        
                                <input class="form-control" placeholder="Prioridad" value="{{old('prioridad')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="afectacion de servicio">Afectación de servicio</label>
                        
                                <input class="form-control" placeholder="Afectación de servicio" value="{{old('afectacion de servicio')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="servicio afectado">Servico afectado</label>
                        
                                <input class="form-control" placeholder="Servico afectado" value="{{old('servicio afectado')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="riesgo">Riesgo</label>
                        
                                <input class="form-control" placeholder="Riesgo" value="{{old('riesgo')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="estado">Estado</label>
                        
                                <input class="form-control" placeholder="Estado" value="{{old('estado')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="tipo de cambio">Tipo de cambio</label>
                        
                                <input class="form-control" placeholder="Tipo de cambio" value="{{old('tipo de cambio')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="responsable">Responsable</label>
                        
                                <input class="form-control" placeholder="Responsable" value="{{old('responsable')}}">
                
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <label for="fecha ejecucion">Fecha ejecución</label>
                        
                                <input class="form-control" placeholder="Fecha ejecución" value="{{old('fecha ejecucion')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="elemento de red">Elemento de red</label>
                        
                                <input class="form-control" placeholder="Elemento de red" value="{{old('elemento de red')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="plan de cambio">Plan de cambio</label>
                        
                                <input class="form-control" placeholder="Plan de cambio" value="{{old('plan de cambio')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="plan de retorno">Plan de retorno</label>
                        
                                <input class="form-control" placeholder="Plan de retorno" value="{{old('plan de retorno')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="resultados">Resultados</label>
                        
                                <input class="form-control" placeholder="Resultados" value="{{old('resultados')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="justificacion">Justificación</label>
                        
                                <textarea class="form-control" placeholder="Justificación" value="{{old('justificacion')}}"> </textarea>
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="usuario">Usuario</label>
                        
                                <input class="form-control" placeholder="Usuario" value="{{old('usuario')}}">
                
                            </div>

                            <div style="padding-top:15px" align="center">

                            <a class="btn btn-danger" href="{{route('prueba')}}">Cancelar</a>


                            <a class="btn btn-success" href="{{route('ventana')}}">Guardar</a>

                            </div>
                            

                        </div>

                    </div>
 

                       
                    
                

        </form>


    </div>


@endsection