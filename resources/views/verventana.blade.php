@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

    <h1 align="center">Ventana</h1>

    <div class="card">

        <div class="card-body">

            <table class="table-responsive table-bordered table-hover" id=listaVentana>

                <thead class="thead">

                    <tr>

                        <th>Estado</th>

                    </tr>

                </thead>

                <tbody>
                    
                    
                    @foreach ($ventana as $ventanaItem)

                    <tr>

                        <td>{{ $ventanaItem->nombre_Estado}}</td>

                    </tr>

                    @endforeach



                </tbody>

            </table>

        </div>

    </div>

@endsection
