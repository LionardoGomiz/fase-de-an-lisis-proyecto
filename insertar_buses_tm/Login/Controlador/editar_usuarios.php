<?php
// including the database connection file
include_once("../Modelo/conexion_login.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	$tipo_usuario=$_POST['tipo_usuario'];	
	
	// checking empty fields
	if(empty($correo) || empty($contrasena) || empty($tipo_usuario)) {	
			
		if(empty($correo)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($contrasena)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($tipo_usuario)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$sql = "UPDATE usuarios SET contrasena=:contrasena, correo=:correo, tipo_usuario=:tipo_usuario WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $id);
		$query->bindparam(':correo', $correo);
		$query->bindparam(':contrasena', $contrasena);
		$query->bindparam(':tipo_usuario', $tipo_usuario);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: ver.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM usuarios WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$correo = $row['correo'];
	$contrasena = $row['contrasena'];
	$tipo_usuario = $row['tipo_usuario'];
}
?>
<html>
<head>	
	<title>Editar Usuario</title>
        <link rel="icon" type="/image/png" href="../../Login/img/tm.ico"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>
                            .borde{
                                background-color: yellow;
                                text-align: center;
                            }
                             .borde2{
                                background-color: yellow;
                                height: 80px;
                                top: 620px;
                                
                            }
                               .borde3{
                                right: 24px;
                                
                            }
                        </style> 
</head>

<body>
	<a href="ver.php">Home</a>
	
         <div class="container">
            <div>
               <h1 class="col-12 borde fixed-top display-4">¿Desea editar este Usuario?</h1>  
        </div>
        </div>
	
        <br/><br/><br>
        <div class="container border" style="width:480px;">
             <br/><br/>
        
        <form name="form1" method="post" action="editar_usuarios.php">
              
                  
      <div class="float-left" style="margin-left:5px;"><h4>Correo Electronico:</h4></div><br></br>
    <input type="text" name="correo" style="width:245px;" value="<?php echo $correo;?>">
        <br></br>
    <div class="float-left"><h4>Contraseña:</h4></div><br></br>
    <input type="text" name="contrasena" style="width:120px;" value="<?php echo $contrasena;?>">
      

      <br></br>
      
     
       	 <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
            <button type="submit" name="update" value="" class="btn btn-primary">Enviar</button> 
    
      <br></br>
      
           
		
	</form>
      
         </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
          <div class="container">
            <div>
               <h1 class="col-12 borde2 fixed-top display-4"></h1>  
        </div>
        </div>
</body>
</html>
