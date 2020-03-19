@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <div class="container" align="center">

        <h1 style="text-align:center; padding:10px">Nueva ventana</h1>

        <form class="shadow py-3 " style="background:#D7E2E9;"  method="POST">

            @csrf

                    <div class="row">

                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Solicitud de cambio</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <label for="estado">Estado</label>
                        
                                <input name="estado" type="text" class="form-control2" placeholder="Estado" value="{{old('estado')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="fecha de presentacion">Fecha de presentación</label>
                        
                                <input name="fecha de presentacion" type="date" class="form-control2" placeholder="Fecha de presentacion" value="{{old('fecha de presentacion')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="tipo de cambio">Tipo de cambio</label>
                        
                                <input name="tipo de cambio" type="text" class="form-control2" placeholder="Tipo de cambio" value="{{old('tipo de cambio')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="responsable">Responsable</label>
                        
                                <input name="responsable" type="text" class="form-control2" placeholder="Responsable" value="{{old('responsable')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Fecha de ejecución</h4>

                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="fecha inicio">Fecha inicio</label>
                        
                                <input name="fecha inicio" type="date" class="form-control2" placeholder="Fecha inicio" value="{{old('fecha inicio')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora inicio">Hora inicio</label>
                        
                                <input name="hora inicio" type="time" class="form-control2" placeholder="Hora inicio" value="{{old('hora inicio')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora fin">Hora fin</label>
                        
                                <input name="hora fin" type="time" class="form-control2" placeholder="Hora fin" value="{{old('hora fin')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="duración">Duración</label>
                        
                                <input name="duración" type="time" class="form-control2" placeholder="Duración" value="{{old('duración')}}">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="estado">Descripción</label>
                        
                                <textarea name="estado" type="text" class="form-control2" placeholder="Descripción" value="{{old('estado')}}"></textarea>
                
                            </div>

                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
    
                                <h4>Justificación</h4>
    
                            </div>
    
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="justificacion">Justificación</label>
                            
                                <input name="justificacion" type="text" class="form-control2" placeholder="Justificación" value="{{old('justificacion')}}">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="prioridad">Prioridad</label>
                            
                                <input name="prioridad" type="text" class="form-control2" placeholder="Prioridad" value="{{old('prioridad')}}">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="afecta servicios">Afecta servicios</label>
                            
                                <input name="afecta servicios" type="text" class="form-control2" placeholder="Afecta servicios" value="{{old('afecta servicios')}}">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="servicios afectados">Servicios afectados</label>
                            
                                <input name="servicios afectados" type="text" class="form-control2" placeholder="Servicios afectados" value="{{old('servicios afectados')}}">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="afecta inventario">Afecta inventario</label>
                            
                                <input name="afecta inventario" type="text" class="form-control2" placeholder="Afecta inventario" value="{{old('afecta inventario')}}">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="modifica topologiá de red">Modifica topologiá de red</label>
                            
                                <input name="modifica topologiá de red" type="text" class="form-control2" placeholder="Modifica topologiá de red" value="{{old('modifica topologiá de red')}}">

                            </div>
                        
                        </div>


                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Elementos red a intervenir</h4>

                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="elemento">Elemento</label>

                                <input name="elemento" type="text" class="form-control2" placeholder="Elemento" value="{{old('elemento')}}">

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="estado">Descripción</label>
                        
                                <textarea name="estado" type="text" class="form-control2" placeholder="Descripción" value="{{old('estado')}}"></textarea>
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="riesgos asociados al cambio">Riesgos asociados al cambio</label>
                        
                                <input name="riesgos asociados al cambio" type="text" class="form-control2" placeholder="Riesgos asociados al cambio" value="{{old('riesgos asociados al cambio')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Plan de cambio</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="actividad">Actividad</label>
                        
                                <input name="actividad" type="text" class="form-control2" placeholder="Actividad" value="{{old('actividad')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora inicio">Hora inicio</label>
                            
                                <input name="hora inicio" type="time" class="form-control2" placeholder="Hora inicio" value="{{old('hora inicio')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="hora fin">Hora fin</label>
                            
                                <input name="hora fin" type="time" class="form-control2" placeholder="Hora fin" value="{{old('hora fin')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="duración">Duración</label>
                            
                                <input name="duración" type="time" class="form-control2" placeholder="Duración" value="{{old('duración')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="responsable">Responsable</label>
                            
                                <input name="responsable" type="text" class="form-control2" placeholder="Responsable" value="{{old('responsable')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="teléfono">Teléfono</label>
                            
                                <input name="teléfono" type="text" class="form-control2" placeholder="Teléfono" value="{{old('teléfono')}}">
                            
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Plan de retorno</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="actividad">Actividad</label>
                        
                                <input name="actividad" type="text" class="form-control2" placeholder="Actividad" value="{{old('actividad')}}">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora inicio">Hora inicio</label>
                            
                                <input name="hora inicio" type="time" class="form-control2" placeholder="Hora inicio" value="{{old('hora inicio')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="hora fin">Hora fin</label>
                            
                                <input name="hora fin" type="time" class="form-control2" placeholder="Hora fin" value="{{old('hora fin')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="duración">Duración</label>
                            
                                <input name="duración" type="time" class="form-control2" placeholder="Duración" value="{{old('duración')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="responsable">Responsable</label>
                            
                                <input name="responsable" type="text" class="form-control2" placeholder="Responsable" value="{{old('responsable')}}">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="teléfono">Teléfono</label>
                            
                                <input name="teléfono" type="text" class="form-control2" placeholder="Teléfono" value="{{old('teléfono')}}">
                            
                            </div>
                            

                        </div>

                    </div>

                    <div class="row" style="padding-top:30px; padding-bottom:15px">

                        <div class="col-6" align="right">

                            <button class="btn btn-danger" style="padding-left:5px; height:30px; width:90px">Cancelar</button>

                        </div>

                        <div class="col-6" align="left">

                            <button class="btn btn-success" style="padding-left:5px; height:30px; width:90px">Guardar</button>

                        </div>

                    </div>

        </form>


    </div>


@endsection






