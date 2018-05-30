<?php
//including the database connection file
include_once("../Modelo/conexion_login.php");


//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM usuarios ORDER BY id DESC");
?>

<html>
<head>	
	<title>Ver Usuarios Registrados</title>
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
      <div>
               <h1 class="col-12 borde fixed-top display-4">Administracion de Usuarios</h1>  
               
       </div>
  
    <br></br><br></br> 
    <div class="container">
	<table class="table table-dark table-hover" width='80%' border=0>
            
            

	<tr bgcolor='#CCCCCC'>
		<td>Correo</td>
		<td>Contraseña</td>
		<td>Tipo Usuario</td>
                <td>Editar Usuario</td>
                <td>Eliminar Usuario</td>
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['correo']."</td>";
		echo "<td>".$row['contrasena']."</td>";
		echo "<td>".$row['tipo_usuario']."</td>";	
		echo "<td><a href=\"../Controlador/editar_usuarios.php?id=$row[id]\">Editar</a</td>";
                 echo "<td><a href=\"../Controlador/eliminar_usuario.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Eliminar</a></td>";		
	}
	?>
	</table>
    </div>
    
    
    <div class="borde3">
    <a href="../Vista/panel_de_control.php"  class="btn btn-success" role="button">volver al panel</a>
    </div>
    <div>
               <h1 class="col-12 borde2 fixed-bottom display-4"></h1>  
               
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</html>
