@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <div class="container" align="center">

        <h1 style="text-align:center; padding:10px">Nueva ventana</h1>

        <form class="shadow py-3 " style="background:#D7E2E9;"  method="POST" action="{{ route('verventana.store') }}">

            @csrf


                    <div class="row">

                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Solicitud de cambio</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <label for="estado">Estado</label>
                        
                                <select name="estado" id="estado" class="form-control2">

                                    @foreach ($estado as $estados)

                                        <option value="{{$estados->id}}"
                                            {{ (old('estado.id') == $estados->id) ? 'selected':''}}>
                                            {{ $estados->nombre_Estado }}
                                        </option>
                                        
                                    @endforeach

                                </select>
                 
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="fecha_De_Presentacion">Fecha de presentación</label>
                        
                                <input type="text" name="fecha_De_Presentacion" class="form-control2" placeholder="Fecha de presentación" value="{{old('fecha_De_Presentacion')}}" id="fecha_De_Presentacion">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="tipo de cambio">Tipo de cambio</label>
                        
                                <select name="tipo de cambio" id="tipo de cambio" class="form-control2">
                                    
                                    @foreach ($tipocambio as $tipocambios)

                                        <option value="{{$tipocambios->id}}"
                                            {{ (old('tipocambio.id') == $tipocambios->id) ? 'selected':'' }}>
                                            {{ $tipocambios->nombre_Tipo_De_Cambio }}
                                        </option>
                                        
                                    @endforeach

                                </select>
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="responsables">Responsable</label>
                        
                                <select name="responsables" id="responsables" class="form-control2">
                                    
                                    @foreach ($responsable as $responsables)

                                        <option value="{{$responsables->id}}"
                                            {{ (old('responsable.id') == $responsables->id) ? 'selected':'' }}>
                                            {{ $responsables->nombre_Responsable }}
                                        </option>
                                        
                                    @endforeach

                                </select>
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Fecha de ejecución</h4>

                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="fecha_Inicio_Ejecucion">Fecha inicio</label>
                        
                                <input type="text" name="fecha_Inicio_Ejecucion" class="form-control2" placeholder="Fecha inicio" value="{{old('fecha_Inicio_Ejecucion')}}" id="fecha_Inicio_Ejecucion">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora_Inicio_Ejecucion">Hora inicio</label>
                        
                                <input name="hora_Inicio_Ejecucion" type="text" class="form-control2" placeholder="Hora inicio" value="{{old('hora_Inicio_Ejecucion')}}" id="hora_Inicio_Ejecucion">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora_Fin_Ejecucion">Hora fin</label>
                        
                                <input name="hora_Fin_Ejecucion" type="text" class="form-control2" placeholder="Hora fin" value="{{old('hora_Fin_Ejecucion')}}" id="hora_Fin_Ejecucion">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="duracion_Ejecucion">Duración</label>
                        
                                <input name="duracion_Ejecucion" type="text" class="form-control2" placeholder="Duración" value="{{old('duracion_Ejecucion')}}" id="duracion_Ejecucion">
                
                            </div>
                        
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="descripcion_Ejecución">Descripción</label>
                        
                                <textarea name="descripcion_Ejecución" type="text" class="form-control2" placeholder="Descripción" value="{{old('descripcion_Ejecución')}}" id="descripcion_Ejecución"></textarea>
                
                            </div>

                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
    
                                <h4>Justificación</h4>
    
                            </div>
    
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="justificacion">Justificación</label>
                            
                                <input name="justificacion" type="text" class="form-control2" placeholder="Justificación" value="{{old('justificacion')}}" id="justificacion">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="prioridades">Prioridad</label>
                            
                                <select name="prioridades" id="prioridades" class="form-control2">

                                    @foreach ($prioridad as $prioridades)

                                        <option value="{{$prioridades->id}}"
                                            {{(old('prioridad.id') == $prioridades->id) ? 'selected':'' }}>
                                            {{ $prioridades->nombre_Prioridad }}
                                        </option>
                                        
                                    @endforeach


                                </select>
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="afectaServicios">Afecta servicios</label>
                            
                                <select name="afectaServicios" id=afectaServicios" class="form-control2">
                                    
                                    @foreach ($afectaservicio as $afectaservicios)

                                    <option value="{{$afectaservicios->id}}"
                                        {{(old('afectaservicio.id') == $afectaservicios->id) ? 'selected':'' }}>
                                        {{ $afectaservicios->nombre_Afecta_Servicio }}
                                    </option>
                                        
                                    @endforeach


                                </select>
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="servicios_Afectados">Servicios afectados</label>
                            
                                <input name="servicios_Afectados" type="text" class="form-control2" placeholder="Servicios afectados" value="{{old('servicios_Afectados')}}" id="servicios_Afectados">
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="afecta_Inventario">Afecta inventario</label>
                            
                                <select name="afecta_Inventario" id="afecta_Inventario" class="form-control2">

                                    @foreach ($afectainventario as $afectainventarios)

                                    <option value="{{$afectainventarios->id}}"
                                        {{(old('afectainventario.id') == $afectainventarios->id) ? 'selected':'' }}>
                                        {{ $afectainventarios->nombre_Afecta_Inventario }}
                                    </option>
                                        
                                    @endforeach

                                </select>
                    
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="modifica_Topologia_De_Red">Modifica topología de red</label>
                            
                                <select name="modifica_Topologia_De_Red" id="modifica_Topologia_De_Red" class="form-control2">
                                    
                                    @foreach ($modificatopologia as $modificatopologias)

                                    <option value="{{$modificatopologias->id}}"
                                        {{(old('modificatopologia.id') == $modificatopologias->id) ? 'selected':'' }}>
                                        {{ $modificatopologias->nombre_Modifica_Topologia }}
                                    </option>
            
                                    @endforeach

                                </select>

                            </div>
                        
                        </div>


                        <div class="col-6">

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Elementos red a intervenir</h4>

                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                    
                                <label for="elemento">Elemento</label>

                                <input name="elemento" type="text" class="form-control2" placeholder="Elemento" value="{{old('elemento')}}" id="elemento">

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="descripcion_del_elemento">Descripción del elemento</label>
                        
                                <textarea name="descripcion_del_elemento" type="text" class="form-control2" placeholder="Descripción del elemento" value="{{old('descripcion_del_elemento')}}" id="descripcion_del_elemento"></textarea>
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="riesgos_Asociados_Al_Cambio">Riesgos asociados al cambio</label>
                        
                                <input name="riesgos_Asociados_Al_Cambio" type="text" class="form-control2" placeholder="Riesgos asociados al cambio" value="{{old('riesgos_Asociados_Al_Cambio')}}" id="riesgos_Asociados_Al_Cambio">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Plan de cambio</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="actividad_De_Cambio">Actividad de cambio</label>
                        
                                <input name="actividad_De_Cambio" type="text" class="form-control2" placeholder="Actividad de cambio" value="{{old('actividad_De_Cambio')}}" id="actividad_De_Cambio">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora_Inicio_De_Cambio">Hora inicio cambio</label>
                            
                                <input name="hora_Inicio_De_Cambio" type="text" class="form-control2" placeholder="Hora inicio cambio" value="{{old('hora_Inicio_De_Cambio')}}" id="hora_Inicio_De_Cambio">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="hora_Fin_De_Cambio">Hora fin cambio</label>
                            
                                <input name="hora_Fin_De_Cambio" type="text" class="form-control2" placeholder="Hora fin cambio" value="{{old('hora_Fin_De_Cambio')}}" id="hora_Fin_De_Cambio">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="duracion_De_Cambio">Duración cambio</label>
                            
                                <input name="duracion_De_Cambio" type="text" class="form-control2" placeholder="Duración cambio" value="{{old('duracion_De_Cambio')}}" id="duracion_De_Cambio">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="responsable_De_Cambio">Responsable de cambio</label>
                            
                                <select name="responsable_De_Cambio" id="responsable_De_Cambio" class="form-control2">
                                    
                                    @foreach ($responsablecambio as $responsablecambios)

                                    <option value="{{$responsablecambios->id}}"
                                        {{(old('responsable.id') == $responsablecambios->id) ? 'selectec':'' }}>
                                        {{ $responsablecambios->nombre_Responsable }}
                                    </option>
                                        
                                    @endforeach

                                </select>
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="telefono_Cambio">Teléfono de cambio</label>
                            
                                <input name="telefono_Cambio" type="text" class="form-control2" placeholder="Teléfono de cambio" value="{{old('telefono_Cambio')}}" id="telefono_Cambio">
                            
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">

                                <h4>Plan de retorno</h4>

                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="actividad_De_Retorno">Actividad de retorno</label>
                        
                                <input name="actividad_De_Retorno" type="text" class="form-control2" placeholder="Actividad de retorno" value="{{old('actividad_De_Retorno')}}" id="actividad_De_Retorno">
                
                            </div>

                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                
                                <label for="hora_Inicio_De_Retorno">Hora inicio retorno</label>
                            
                                <input name="hora_Inicio_De_Retorno" type="text" class="form-control2" placeholder="Hora inicio retorno" value="{{old('hora_Inicio_De_Retorno')}}" id="hora_Inicio_De_Retorno">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="hora_Fin_De_Retorno">Hora fin retorno</label>
                            
                                <input name="hora_Fin_De_Retorno" type="text" class="form-control2" placeholder="Hora fin retorno" value="{{old('hora_Fin_De_Retorno')}}" id="hora_Fin_De_Retorno">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="duracion_De_Retorno">Duración retorno</label>
                            
                                <input name="duracion_De_Retorno" type="text" class="form-control2" placeholder="Duración retorno" value="{{old('duracion_De_Retorno')}}" id="duracion_De_Retorno">
                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="responsable_De_Retorno">Responsable de retorno</label>
                            
                                <select name="responsable_De_Retorno" id="responsable_De_Retorno" class="form-control2">
                                    
                                    @foreach ($responsableretorno as $responsableretornos)

                                    <option value="{{$responsableretornos->id}}"
                                        {{(old('responsable.id') == $responsableretornos->id) ? 'selectec':'' }}>
                                        {{ $responsableretornos->nombre_Responsable }}
                                    </option>
                                        
                                    @endforeach

                                </select>                            
                            </div>
                            
                            <div class="form-group tamañoNuevaVentana" style="padding-left: 10px; padding-top:5px; width:360px; heigth: 36px;">
                            
                                <label for="telefono_Retorno">Teléfono de retorno</label>
                            
                                <input name="telefono_Retorno" type="text" class="form-control2" placeholder="Teléfono de retorno" value="{{old('')}}" id="telefono_Retorno">
                            
                            </div>
                            

                        </div>

                    </div>

                    <div class="row" style="padding-top:30px; padding-bottom:15px">

                        <div class="col-6" align="right">

                            <button class="btn btn-danger" style="padding-left:5px; height:30px; width:90px">Cancelar</button>

                        </div>

                        <div class="col-6" align="left">

                            <button class="btn btn-success" style="padding-left:5px; height:30px; width:90px" >Guardar</button>

                        </div>

                    </div>

        </form>


    </div>


@endsection






