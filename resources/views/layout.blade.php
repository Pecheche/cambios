<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" />




    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>






    <title>@yield('title', 'Cambios')</title>
</head>
<body>


    <div>

        <nav class="navbar nav-justified" style="background:#66ff99">
    
                <a class="navbar-brand " href="{{route('prueba')}}">
                    
                    {{config('app.name')}}
                
                </a>
    

    
            <ul class="nav nav-pills">
    
                <li class="nav-item">
                    <a class="nav-link pad" href="https://www.youtube.com/" style="padding:15px">pepe1</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com/webhp?hl=es-419&sa=X&ved=0ahUKEwia7MPM8vTnAhVyTd8KHQSMA_MQPAgH" style="padding:15px">pepe2</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="https://mail.google.com/mail/u/0/?tab=wm&ogbl" style="padding:15px">pepe3</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="https://es-la.facebook.com/" style="padding:15px">pepe4</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/?hl=es-la" style="padding:15px">pepe5</a>
                </li>
    
            </ul>
        </nav>

    </div>

    @yield('pruebas')
 
    
</body>
</html>