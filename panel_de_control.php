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
              
        <title>Panel de Control</title>
        
        <style type="text/css">
             .borde{
                background-color: green;
                text-align: center;
                height: 80px;
                
            }
                .borde1{
                background-color: green;
                text-align: center;
                height: 80px;
                top: 620px;
                left: 214px;
            }
            
                 .texto{
                background-color: green;
                text-align: center;
               
            }
             
        </style>
        
    </head>
  

    <body>
        <?php
        session_start();

        echo 'Bienvenido a la página #1';

        $_SESSION['correo']  = '?';
        $_SESSION['contrasena'] = '?';
        $_SESSION['instante']   = time();
        ?>
        <div class="container">
            <div>
               <h1 class="col-12 borde fixed-top display-4">Panel de Administracion principal</h1>  
        </div>
        </div>
        
        <br></br><br></br>
        <div class="container">
           <div class="card w-20 float-right">
                <div class="card-header bg-warning">
                    <p>ADMINISTRADOR</p>
                </div>
               <img src="../img/WIN_Pro.jpg">
                <div class="card-body bg-danger">
                    <h3 class="card-title"><?php echo "Hola: " . $_SESSION["correo"]; ?></h3>
                    <p class="card-text">Estudiante de Ingenieria de Software</p>
                    <a href="../Controlador/cirre.php" class="btn btn-primary">Cerrar Sesion</a>
                    
                </div>
                <div class="card-footer bg-info">
                    <p>Huawei</p>
                </div>
        </div>
            
        </div>
        
        
        <div class="col-2">
            
            
            
            <div class="list-group db-dark clear-left">
                <a href="../../insertar_buses/Vista/agregar_usuarios.html" class="list-group-item list-group-item-action bg-purple">Insertar Buses</a>
                <a href="../Controlador/editar_usuarios.php" class="list-group-item list-group-item-action">Editar Buses</a>
                <a href="../Controlador/ver.php" class="list-group-item list-group-item-action">Eliminar Buses</a>
                <a href="../Controlador/ver.php" class="list-group-item list-group-item-action">Ver Buses</a>
            <a href="#" class="list-group-item list-group-item-action">Generar Reporte de Buses Abordados</a>
            <a href="../Vista/agregar_usuarios.html" class="list-group-item list-group-item-action">Agregar Usuarios</a>
            <a href="../Controlador/editar.php" class="list-group-item list-group-item-action">Editar Usuarios</a>
            <a href="../Controlador/ver.php" class="list-group-item list-group-item-action">Eliminar Uusarios</a>
            <a href="../Controlador/ver.php" class="list-group-item list-group-item-action">Ver usuarios</a>
            <a href="#" class="list-group-item list-group-item-action">Agregar Omagen Principal</a>
            <a href="#" class="list-group-item list-group-item-action">Tercero</a>
            <a href="#" class="list-group-item list-group-item-action">Tercero</a>
            <a href="#" class="list-group-item list-group-item-action">Cuarto</a>
            <a href="#" class="list-group-item list-group-item-action">Cuarto</a>
         </div>
        </div>
        
        
     
        
        
       <div style="height: 100px;width: 200px; overflow-y: auto; ">
          
            </div>

               <div>
                <p class="col-10 borde1 fixed-bottom">&copy;Copyright Lionardo Gomiz</p>  
            </div>
      
    </body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
