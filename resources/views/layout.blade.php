<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">





    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>






    <title>@yield('title', 'cambios')</title>
</head>
<body style="background:#E5F5FE">


    <div>

        <nav class="navbar navbar-expand shadow-sm" style="background:#D7E2E9; color:white">

            <div class="dropdown">

                <ul class="nav nav-pills1">
    
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#"  align="center" id="usuarios" data-toggle="dropdown" style="font-size:1.5em; color:#000000;">Usuarios</a>

                        <div class="dropdown-menu">

                            <a class="dropdown-item" align="center" href="/usuarios" style="font-size:1.5em">Lista de usuarios</a>


                        </div>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#"  align="center" id="usuarios" data-toggle="dropdown" style="font-size:1.5em; color:#000000;">Responsables</a>

                        <div class="dropdown-menu">

                            <a class="dropdown-item" align="center" href="/responsables" style="font-size:1.5em">Lista de responsables</a>


                        </div>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#"  align="center" id="ventana" data-toggle="dropdown" style="font-size:1.5em; color:#000000">Ventana</a>

                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" align="center" href="/crear-ventana" style="font-size:1.5em">Crear nueva ventana</a>

                            <a class="dropdown-item" align="center" href="/verventana" style="font-size:1.5em">Lista de ventanas</a>


                        </div>

                    </li>
        
                </ul>

            </div>
    
            
        </nav>

    </div>

    @yield('pruebas')
 
    
</body>
</html>