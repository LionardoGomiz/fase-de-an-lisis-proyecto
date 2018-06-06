<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin tÃ­tulo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        
    </head>
    
    <body>
    
        
        
        <form action="insertar_registros_perfiles.php"method="post" align="center" >
            <div style="height: 200px;">
            <br></br>
            <div class="container border">
                
                <h1>Insertar nuevo Usuario</h1>
                 
  <div class="form-group" id="form1">
      <div class="float-left" style="margin-left:5px;"><h4>Correo:</h4></div>
     <label for="exampleInputEmail"></label>
    <input type="text" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el caracter @" style="width: 99%; margin-left:5px;">
    
    <div class="float-left" style="margin-left:5px;"><h4>Contraseña:</h4></div>
    <label for="exampleInputPassword"></label>
    <input type="text" name="contrasena" class="form-control" id="exampleInputPassword" placeholder="Ingrese numeros y una letra en mayuscula" style="width: 99%; margin-left:5px;">
    <br></br>
    
      <p>Perfil: 
              <label for="tipo_usuario"></label>
              <select name="tipo_usuario" id="tipo_usuario">
                <option>administrador</option>
                <option>usuario</option>
              </select>
            </p>
       
      <br></br>
      
      <button type="submit" name="Submit" value="Enviar" class="btn btn-success">Agregar Usuario</button> 
     
      <br></br>
     
           </div>
                
            </div>
</span>  
    </div>
                
                 
          
           
        
        </form>
    
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</html>