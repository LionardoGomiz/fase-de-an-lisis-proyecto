<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
                <link rel="icon" type="/image/png" href="../img/tm.ico"/>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
              
        <title>Panel de Control Usuarios</title>
        
        <style type="text/css">
             .borde{
                background-color: blueviolet;
                text-align: center;
                height: 80px;
                
            }
                .borde1{
                background-color: blueviolet;
                text-align: center;
                height: 80px;
                top: 698px;
                
            }
            
                 .texto{
                background-color: green;
                text-align: center;
               
            }
             
        </style>
        
    </head>
     <?php 
        session_start();
        if (!isset($_SESSION["correo"])){
            
            header("Location:login.php");
        }
        ?>


    <body>
        <br></br><br></br><br> 
        <div class="container">
            <div>
                <h1 class="col-12 borde fixed-top display-4">
                    <a href="../Controlador/ver_u.php" style="margin-left:8px;" class="btn btn-dark">Ver Buses</a>
                    <a href="../Vista/#.php" style="margin-left:8px;" class="btn btn-success">Generar reporte de los Buses</a>
                     <a href="../Controlador/cirre.php" style="margin-left:40px;" class="btn btn-warning">Volver Buses</a>
                    <a href="../Controlador/cirre.php" style="margin-right:18px;" class="btn btn-danger">Cerrar Sesion</a>
                </h1>  
        </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="../img/electrico.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="../img/Scania_Biarticulado1.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="../img/alimentador.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
        </div>
               
       <div style="height: 100px;width: 200px; overflow-y: auto; ">
          
            </div>

               <div>
                <p class="col-12 borde1 fixed-bottom">&copy;Copyright Lionardo Gomiz</p>  
            </div>
      
    </body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
