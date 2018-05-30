<html>
    <head>
        <title></title>
    </head>

<?php
//pagina encargada de recibir los parametros de login.html
//1. instanciamos la clase PDO

try {
    
    $base=new PDO("mysql:host=localhost; dbname=login_tm", "root", ""); 
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //escribmios nuestra consulta sql
    $sql="SELECT * FROM USUARIOS WHERE CORREO= :correo AND CONTRASENA= :contrasena";
    
    //preparamos nuestra consulta sql
    $resultado=$base->prepare($sql);
    
    $correo= htmlentities(addslashes($_POST["correo"]));
    
    $contrasena= htmlentities(addslashes($_POST["contrasena"]));
    
    $resultado->bindValue(":correo", $correo);
    
    $resultado->bindValue(":contrasena", $contrasena);
    
    $resultado->execute();
    
    $numero_registro=$resultado->rowCount();
    
    if ($numero_registro!=0){
        
        session_start();
        
        //almacenamos la sesion del usuario en la variable super global session
        $_SESSION["correo"]=$_POST["contrasena"];
        
        if(isset($_SESSION["correo"])){
            if ($_SESSION["correo"]["administrador"]){
                
            }
		 header("location:../Vista/panel_de_control.php");
        }	  
        
        }elseif ($_SESSION["correo"]) {
            if ($_SESSION["correo"]["usuario"]){
                
                header("location:../Vista/panel_de_usuario_u.php");
                       
        }

        
               
    }else{
        
        header("location:../Vista/login.php");
        
    }
    
    
    
} catch (Exception $e) {
    
    die("Error" .$e->getMessage());
    
}
        ?>
    	
    </body>
    
</html> 


?>

</html>
