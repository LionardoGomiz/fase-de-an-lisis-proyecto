<?php
//including the database connection file
include_once("../Modelo/conexion_login.php");


//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM vehiculos ORDER BY id DESC");
?>

<html>
<head>	
	<title>ver Buses Abordadaos</title>
                <link rel="icon" type="/image/png" href="../../Login/img/tm.ico"/>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>

<body>
    <a href="../Vista/agregar_usuarios.html">Add New Data</a><br/><br/>

    <div class="container">
	<table class="table table-dark table-hover" width='80%' border=0>
            
            

	<tr bgcolor='#CCCCCC'>
		<td>Movil</td>
		<td>Operador</td>
		<td>Modelo</td>
                <td>Carroceria</td>
                <td>Marca</td>
                 <td>Tipologia</td>
                  <td>Editar Bus</td>
                 <td>Eliminar Bus</td>
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['Movil']."</td>";
		echo "<td>".$row['Operador']."</td>";
		echo "<td>".$row['Modelo']."</td>";	
                echo "<td>".$row['Carroceria']."</td>";	
                echo "<td>".$row['Marca']."</td>";	
                echo "<td>".$row['Tipologia']."</td>";	
		echo "<td><a href=\"../Controlador/editar_usuarios.php?id=$row[id]\">Editar</a</td>";
                 echo "<td><a href=\"../Controlador/eliminar_usuario.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</html>
