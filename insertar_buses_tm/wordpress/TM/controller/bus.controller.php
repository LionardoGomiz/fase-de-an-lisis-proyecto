<?php
require_once 'model/buses.php';

class busController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new buses();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/bus/bus.php';

    }


    public function Index2()
    {
        require_once 'view/header.php';
        require_once 'view/bus/bus2.php';
    }

    public function buscador()
    {
        require_once 'view/bus/buscador.php';
        $servername = "localhost";
        $username = "root";
  	$password = "";
  	$dbname = "buses_tm_repetidos";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("ConexiÃ³n fallida: ".$conn->connect_error);
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
    }




    public function Editar()
    {
        $bus = new buses();

        if (isset($_REQUEST['id'])) {
            $bus = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/header.php';
        require_once 'view/bus/bus-editar.php';

    }

    public function Agregar()
    {
        $bus = new buses();

        if (isset($_REQUEST['id'])) {
            $bus = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/bus/bus-agregar.php';
    }

    public function Guardar()
    {
        $bus = new buses();
        $bus->id = $_REQUEST['id'];
        $bus->Movil = $_REQUEST['Movil'];
        $bus->Operador = $_REQUEST['Operador'];
        $bus->Modelo = $_REQUEST['Modelo'];
        $bus->Carroceria = $_REQUEST['Carroceria'];
        $bus->Marca = $_REQUEST['Marca'];
        $bus->Tipologia = $_REQUEST['Tipologia'];


        $bus->id > 0
            ? $this->model->Actualizar($bus)
            : $this->model->Registrar($bus);

        header('Location: index.php');

    }


    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
        {
        }
    }

}

