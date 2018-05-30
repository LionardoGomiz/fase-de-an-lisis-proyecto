<?php
// including the database connection file
include_once("../Modelo/conexion_login.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	 $Movil = $_POST['Movil'];
         $Operador = $_POST['Operador'];
         $Modelo = $_POST['Modelo'];
         $Carroceria = $_POST['Carroceria'];
         $Marca = $_POST['Marca'];
         $Tipologia = $_POST['Tipologia'];
	// checking empty fields
	if(empty($Movil) || empty($contrasena) || empty($tipo_usuario)) {	
			
		if(empty($Movil) || empty($Operador) || empty($Modelo) || empty($Carroceria) || empty($Marca) || empty($Tipologia)){
        
        if(empty($Movil)){
            echo "<font color='red'>Por favor escribs el numero interno del busu aborodado.</font><br/> ";
        }
        
        if(empty($Operador)){
            echo "<font color='red'>Por favor introduzca la empresa del bus aboroadado.</font><br/> ";
        }
        
         if(empty($Modelo)){
            echo "<font color='red'>Por favor escriba el nombre  del bus abordado.</font><br/> ";
        }
        
         if(empty($Carroceria)){
            echo "<font color='red'>Por favor escriba la carroceria del busu abordado.</font><br/> ";
        }
        
         if(empty($Marca)){
            echo "<font color='red'>Por escriba la marca del bus abordado.</font><br/> ";
        }
        
         if(empty($Tipologia)){
            echo "<font color='red'>Por Escirba el tipo de bus que abordo.</font><br/> ";
        }		
	} else {	
		//actualizando los datos alamacenados en la tabla
		 $sql = "INSERT INTO vehiculos(Movil,Operador,Modelo,Carroceria,Marca,Tipologia) VALUES(:Movil,:Operador,:Modelo,:Carroceria,:Marca,:Tipologia)";
        
        $query = $dbConn->prepare($sql);
        
        $query->bindparam(':Movil', $Movil);
        $query->bindparam(':Operador', $Operador);
        $query->bindparam(':Modelo', $Modelo);
        $query->bindparam(':Carroceria', $Carroceria);
        $query->bindparam(':Marca', $Marca);
        $query->bindparam(':Tipologia', $Tipologia);
        $query->execute();
        
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: ver.php");
	}
}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM vehiculos WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$Movil = $row['Movil'];
	$Operador = $row['Operador'];
	$Modelo = $row['Modelo'];
        $Carroceria = $row['Carroceria'];
	$Marca = $row['Marca'];
	$Tipologia = $row['Tipologia'];
}
?>
<html>
<head>	
	<title>Editar Usuario</title>
        <link rel="icon" type="/image/png" href="../../Login/img/tm.ico"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body>
	<a href="ver.php">Home</a>
	<br/><br/>
	
        <form name="form1" method="post" action="editar_usuarios.php">
		<table border="0">
			<tr> 
				<td>Movil</td>
				<td><input type="text" name="Movil" value="<?php echo $Movil;?>"></td>
			</tr>
			<tr> 
				<td>Operador</td>
				<td><input type="text" name="Operador" value="<?php echo $Operador;?>"></td>
			</tr>
			<tr> 
				<td>Modelo</td>
				<td><input type="text" name="Modelo" value="<?php echo $Modelo;?>"></td>
			</tr>
                        <tr> 
				<td>Carroceria</td>
				<td><input type="text" name="Carroceria" value="<?php echo $Carroceria;?>"></td>
			</tr>
                        <tr> 
				<td>Marca</td>
				<td><input type="text" name="Marca" value="<?php echo $Marca;?>"></td>
			</tr>
                        <tr> 
				<td>Tipologia</td>
				<td><input type="text" name="Tipologia" value="<?php echo $Tipologia;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
