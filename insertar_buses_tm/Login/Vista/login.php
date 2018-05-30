<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="icon" type="/image/png" href="../img/tm.ico"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <title>Inciar Sesion</title>
    </head>
   
    <body backgound-img src="img/biarticulado.jpg">
        
        
         
        
     
        <form align="center" action="../Controlador/login.php"  method="post" >
           <div class="form-col">
            <br></br>
            <div class="container border">
                
                <h1>Por favor inicie Sesion</h1>
                 
  <div class="form-group">
      <div class="float-left" style="margin-left:5px;"><h4>Correo Electronico:</h4></div>
      <div class="border" style="width:1110px; height: 200px;">
    <label for="exampleInputEmail1"></label>
    <input type="email" name="correo" required="true" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email" style="width: 99%; margin-left:5px;">
    
    <div class="float-left" style="margin-left:5px;"><h4>Contraseña:</h4></div>
    <label for="exampleInputEmail1"></label>
    <input type="text" name="contrasena" required="true" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese contraseña" style="width: 99%; margin-left:5px;">
      
       </div>
      <br></br>
      <div class="container">
       <button type="submit" class="btn btn-primary">Enviar</button> 
      </div>
      <br></br>
      <div>
      <small id="emailHelp" class="form-text text-muted">a olvidado su contraseña</small>
      <div class="radio"><label class="radio-inline"><a href="../Controlador/recuperar_contraseña.php>"<input type="radio" name="gusto">Enviar correo de recupercion</a></label></div> 
      </div>
           </div>
                
            </div>
</span>  
        </form>
    </div>
            
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>
</html>
