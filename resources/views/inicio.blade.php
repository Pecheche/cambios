<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css" />




    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

    
    <title>Document</title>
</head>
<body>

    <header>

        <div align="center" class="wrapper" style="padding-top:60px;">

            <img src="/img/logo.png" alt="logo tigo"  width="18%" height="18%">
    
            <h4 style="color:#115992; font-weight:bold; padding-top:20px">ADMINISTRACIÓN DE CAMBIOS</h4>
    
        </div>

        <div align="center" class="subheader">

            <h5 style="font-weight:bold; color:#CE3613; padding-top:px">INICIO DE SESIÓN</h5>

        </div>

    </header>


    <div class="container wrapper" style="padding-top:50px; ">

        <div class="row" style="padding-top:15px;">

            
            <div align="center">
            
                <h4><span><i class="fa fa-user"></i> Usuario</span></h4>

            </div>

            <div align="center"> 

                <input type="text" class="form-control" style="width:30%" placeholder="Usuario">
            
            </div>

        </div>


        <div class="row" style="padding-top:15px;">

        
            <div align="center">
            
                <h4><span><i class="fa fa-key"></i> Contraseña</span></h4>
    
            </div>
    
            <div align="center"> 
    
                <input type="text" class="form-control" style="width:30%;" placeholder="Contraseña">
            
            </div>
    
        </div>
    

    
        <div align="center" style="padding-top:35px;">
    
            <form method="POST " action="/prueba">
                <button type="submit; button" style="color:white" class="btn tigo">Ingresar</button>
            </form>
    
        </div>
    

    </div>



    <footer>

        <div align="center" style="padding-bottom: 70px;">

            <p>Edatel | TigoUne - <?php echo (date("Y"));?></p>
    
            <p><span ><i class="fa fa-phone" aria-hidden="true"></i> Contacto de soporte técnico: </span></p>
    
                <a href="mailto:Fabian.Villa@tigoune.com?subject=Problemas técnicos. Plataforma gestor problemas" "email me"><i class="fa fa-envelope" aria-hidden="true"></i> David.Guerrero.P@tigo.com.co</a> - Teléfono: 515 59 66 - 305
                436 5666
        
        </div> 


    </footer>

</body>

</html>