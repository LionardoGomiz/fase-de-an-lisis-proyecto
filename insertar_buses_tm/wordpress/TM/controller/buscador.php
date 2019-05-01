<?php
include_once ("../model/buses.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buses_tm_repetidos";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Conexión fallida: ".$conn->connect_error);
}

$salida = "";

$query = "SELECT * FROM vehiculos WHERE Movil NOT LIKE '' ORDER By Id_no LIMIT 25";

if (isset($_POST['consulta'])) {
    $q = $conn->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM vehiculos WHERE id LIKE '%$q%' OR Movil LIKE '%$q%' OR Operador LIKE '%$q%' OR Modelo LIKE '%$q%' OR Carroceria LIKE '$q' OR Marca LIKE '$q' OR Tipologia LIKE '$q' ";
}

$resultado = $conn->query($query);

error_reporting(0);
if ($resultado->num_rows>0) {
    $salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
                        <td>id</td>    				   
    					<td>Movil</td>
    					<td>Operador</td>
    					<td>Modelo</td>
                         <td>Carroceria</td> 
                         <td>Marca</td>  
                         <td>Tipologia</td>  
    				</tr>

    			</thead>
    			

    	<tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        $salida.="<tr>
    					<td>".$fila['id']."</td>
                <td>".$fila['Movil']."</td>
                <td>".$fila['Operador']."</td>
                <td>".$fila['Modelo']."</td>
                <td>".$fila['Carroceria']."</td>
                <td>".$fila['Marca']."</td>
                <td>".$fila['Tipologia']."</td>
    				</tr>";

    }
    $salida.="</tbody></table>";
}else{
    $salida.="NO HAY DATOS :(";
}


echo $salida;

$conn->close();



?>