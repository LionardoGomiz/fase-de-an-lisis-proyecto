<?php
//incluimos el archivo de conexion con la bd
include_once ("../Modelo/conexion_login.php");

//creamoa un conscional if en don definimos los id de nuestros inputs
if(isset($_POST['Submit'])){
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $tipo_usuarios = $_POST['tipo_usuario'];
    
    //verificamos si los campos estan vacios
    if(empty($correo) || empty($contrasena)){
        
        if(empty($correo)){
            echo "<font color='red'>Por favor introduzca un correo valido.</font><br/> ";
        }
        
        if(empty($contrasena)){
            echo "<font color='red'>Por favor introduzca una contraseña valida.</font><br/> ";
        }
        
         if(empty($tipo_usuarios)){
            echo "<font color='red'>Por favor selccione un usuario valido.</font><br/> ";
        }
        
        //link para regeresar a la pagina anterior
        echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
    }else{
        //
        
        //insertar datos a la bd
        $sql = "INSERT INTO usuarios(correo,contrasena,tipo_usuario) VALUES(:correo,:contrasena,:tipo_usuario)";
        
        $query = $dbConn->prepare($sql);
        
        $query->bindparam(':correo', $correo);
        $query->bindparam(':contrasena', $contrasena);
        $query->bindparam(':tipo_usuario', $tipo_usuarios);
        $query->execute();
        
        //mensaje de exito en la pantalla
        
        echo "<font color='green'>Usuario creado correctamente.</font><br/> ";
        echo "<br/><a href='agregar_usuarios.html();'>resultado</a>";
        
        //
        
        

    }
    
}

          
            $option = isset($_POST['tipo_usuario']) ? $_POST['tipo_usuario'] : false;
            if ($option) {
               echo htmlentities($_POST['tipo_usuario'], ENT_QUOTES, "UTF-8");
            } else {
              echo "task option is required";
              exit; 
            }
?>