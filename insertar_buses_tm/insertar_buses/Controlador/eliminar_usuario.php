
<?php
//including the database connection file
include("../Modelo/conexion_login.php");
 
//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM vehiculos WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
 
//redirecting to the display page (index.php in our case)
header("Location:../Vista/panel_de_control.html");
?>