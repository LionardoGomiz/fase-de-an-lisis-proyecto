<?php
//incluimos el archivo de conexion con la bd
include_once ("../Modelo/conexion_login.php");

//creamoa un conscional if en don definimos los id de nuestros inputs
if(isset($_POST['Submit'])){
    $Movil = $_POST['Movil'];
    $Operador = $_POST['Operador'];
    $Modelo = $_POST['Modelo'];
    $Carroceria = $_POST['Carroceria'];
    $Marca = $_POST['Marca'];
    $Tipologia = $_POST['Tipologia'];
    
    //verificamos si los campos estan vacios
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
        
        //link para regeresar a la pagina anterior
        echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
    }else{
        //
        
        //insertar datos a la bd
        $sql = "INSERT INTO vehiculos(Movil,Operador,Modelo,Carroceria,Marca,Tipologia) VALUES(:Movil,:Operador,:Modelo,:Carroceria,:Marca,:Tipologia)";
        
        $query = $dbConn->prepare($sql);
        
        $query->bindparam(':Movil', $Movil);
        $query->bindparam(':Operador', $Operador);
        $query->bindparam(':Modelo', $Modelo);
        $query->bindparam(':Carroceria', $Carroceria);
        $query->bindparam(':Marca', $Marca);
        $query->bindparam(':Tipologia', $Tipologia);
        $query->execute();
        
        //mensaje de exito en la pantalla
        
        echo "<font color='green'>Bus Aborodado insertado correctamente.</font><br/> ";
        echo "<br/><a href='agregar_usuarios.html();'>resultado</a>";
        
        //
        
        

    }
    
}

         
?>