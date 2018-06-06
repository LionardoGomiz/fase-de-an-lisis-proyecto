<!doctype html>
<html>

    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
    </head>
    
    <body>
    
    	 <?php
         
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
       
        
        if(isset($_SESSION["correo"])){
                  
		$correo = $_POST["correo"];
			
			$contrasena = $_POST["contrasena"];
        	
            require ("datos_conexion.php");
            
            $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}
			
			mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
			
			mysqli_set_charset($conexion, "utf8");
            
           
			
			$consulta="SELECT correo, contrasena, tipo_usuario FROM usuarios WHERE correo = ? AND contrasena= ?";  
			
			echo "<br><br>";        
			
           // $resultados=mysqli_query($conexion, $consulta);
		   
		   $resultados=mysqli_prepare($conexion,$consulta);
		   
		   $ok=mysqli_stmt_bind_param($resultados, 'ss', $correo, $contrasena);
		   	   
		   $ok=mysqli_stmt_execute($resultados);
		   
		   if($ok==false){
			   
			   echo "Error en la consulta";
			   
		   } else{
			
				$ok=mysqli_stmt_bind_result($resultados,$correo,$contrasena, $tipo_usuario);   
				
				 
			   
		   }
		   
		   
		   while(mysqli_stmt_fetch($resultados)){
			
				echo "Hola " . $correo . "<br>";
				
				echo "Tu perfil es " . $tipo_usuario. "<br>";   
			   
		   }
		   
		   if($tipo_usuario=="administrador"){
			   
				include("panel_de_control.php");   
			   
			   
		   }else{
			   
			   
				include("panel_de_control_u.php");   
			   
		   }
            
        
		   
		   
			mysqli_stmt_close($resultados);
			mysqli_close($conexion);
                                         
        }
        
               
    }else{
        
        header("location:Formulario_login_perfiles.php");
        
    }
    
    
    
} catch (Exception $e) {
    
    die("Error" .$e->getMessage());
    
}
		 	
			
                        
                
            
        ?>
    	
    </body>
    
</html>