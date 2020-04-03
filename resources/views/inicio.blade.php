<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.css">





    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

    
    <title>Cambios</title>
</head>
<body>


                    <!-- Encabezado -->

    <header>

        <div align="center" style="padding-top:60px;">

             <img src="/img/edatel.jpg" alt="logo tigo"  width="18%" height="18%">
        
             <h4 style="color:#115992; font-weight:bold; padding-top:20px">ADMINISTRACIÓN DE CAMBIOS</h4>
        
        </div>
    
         <div align="center" class="subheader">
    
            <h5 style="font-weight:bold; color:#CE3613; padding-top:20px">INICIO DE SESIÓN</h5>
    
        </div>



    </header>



                    <!-- Cuerpo -->


    <div align="center" class="container-fluid" style="padding-top:50px; ">

        <div  class="col-12" style="padding-top:15px; width:360px; heigth: 36px;">


            <form align="center">

                <div align="center" >
                
                    <h4><span><i class="fa fa-user"></i> Usuario</span></h4>
        
                </div>
        
                 <div align="center"> 
        
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                    
                </div>
        
            </form>
        
        </div>


        <div  class="col-12" style="padding-top:15px; width:360px; heigth: 36px;">

        
            <form align="center">

                <div>
            
                    <h4><span><i class="fa fa-key"></i> Contraseña</span></h4>
        
                </div>
        
                <div> 
        
                    <input type="password" id="contaseña" name="contraseña" class="form-control"  placeholder="Contraseña">
                
                </div>

            </form>
    
        </div>
        
    </div>

    
        <div align="center" style="padding-top:35px;">
    
            <form method="POST " action="/prueba">
                <button type="submit; button" class="btn"" style="background:#115992; color:white; width:100px; height:35px">Ingresar</button>
            </form>
    
        </div>
    




                    <!-- Pie de página -->



    <footer >

        <div >

            <div align="center" style="padding-top:120px;">

                <h5>Edatel | Tigo - <?php echo (date("Y"));?></h5>
        
                <h5><span ><i class="fa fa-phone" aria-hidden="true"></i> Contacto de soporte técnico: </span></h5>
        
                     <h5><a href="mailto:David.Guerrero.P@tigo.com.co?subject=Problemas técnicos. Plataforma gestor problemas" "email me"><i class="fa fa-envelope" aria-hidden="true"></i> David.Guerrero.P@tigo.com.co</a> - Teléfono: 515 59 66 - 305
                    436 5666</h5>
            
            </div>

        </div>

 


    </footer>





</body>

</html>