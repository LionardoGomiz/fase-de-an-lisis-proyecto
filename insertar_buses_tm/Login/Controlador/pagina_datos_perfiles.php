
    	 <?php
		 	
			$correo = $_POST["correo"];
			
			$contrasena = $_POST["contrasena"];
        	
            require ("../Modelo/datos_conexion.php");
            
            $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}
			
			mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
			
			mysqli_set_charset($conexion, "utf8");
            
           
			
			$consulta="SELECT  correo, contrasena, tipo_usuario, FROM usuarios WHERE correo = ? AND contrasena= ?";  
			
			echo "<br><br>";        
			
           // $resultados=mysqli_query($conexion, $consulta);
		   
		   $resultados=mysqli_prepare($conexion,$consulta);
		   
		   $ok=mysqli_stmt_bind_param($resultados, 'ss', $correo, $contrasena, $tipo_usuario);
		   	   
		   $ok=mysqli_stmt_execute($resultados);
		   
		   if($ok==false){
			   
			   echo "Error en la consulta";
			   
		   } else{
			
				$ok=mysqli_stmt_bind_result($resultados,$correo,$contrasena, $tipo_usuario);   
				
				 
			   
		   }
		   
		   
		   while(mysqli_stmt_fetch($resultados)){
			
				echo "Hola " . Bienvenido . "<br>";
				
				   
			   
		   }
		   
		   if($tipo_usuario=="administrador"){
			   
				include("../Vista/panel_de_control.php");   
			   
			   
		   }else{
			   
			   
				include("../Vista/panel_de_control_u.php");   
			   
		   }
            
        
		   
		   
			mysqli_stmt_close($resultados);
			mysqli_close($conexion);
            