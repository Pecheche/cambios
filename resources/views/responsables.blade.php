@extends('layout')

@section('title', 'Cambios')

@section('pruebas')

<h1 align="center">Responsables</h1>

<form method="POST">

    @csrf

    <div class="card">

        <div class="card-body">

            <div>

                <table align="center" class="table-responsive-lg table-bordered table-hover">

                    <thead class="thead">

                        <tr align="center" width="120" height="30">

                            <th>ID Responsable</th>
                            <th>Nombre Responsable</th>
                            <th>Correo Responsable</th>
                            <th>Teléfono Responsable</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($responsable as $responsables)

                            <tr height="30" align="center">

                                <td width="150">{{ $responsables->id}}</td>
                                <td width="150">{{ $responsables->nombre_Responsable}}</td>
                                <td width="150">{{ $responsables->correo_Responsable}}</td>
                                <td width="150">{{ $responsables->telefono_Responsable}}</td>

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
