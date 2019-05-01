<?php
class buses
{
    private $pdo;
    public $id;
    public $Movil;
    public $Operador;
    public $Modelo;
    public $Carroceria;
    public $Marca;
    public $Tipologia;


    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM vehiculos");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }



    public function Obtener($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("SELECT * FROM vehiculos WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("DELETE FROM vehiculos WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE vehiculos SET 
						Movil      		= ?,
						Operador          = ?,
						Modelo        = ?,
                        Carroceria        = ?,
                        Marca        = ?,
                        Tipologia        = ?
						
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Movil,
                        $data->Operador,
                        $data->Modelo,
                        $data->Carroceria,
                        $data->Marca,
                        $data->Tipologia,
                        $data->id
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(buses $data)
    {
        try
        {
            if (@$_POST['AgregarBus'])
            {
                $sql = "INSERT INTO vehiculos (Movil,Operador,Modelo,Carroceria,Marca,Tipologia) 
                VALUES('$_POST[Movil]','$_POST[Operador]','$_POST[Modelo]','$_POST[Carroceria]','$_POST[Marca]','$_POST[Tipologia]')";
            }

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Movil,
                        $data->Operador,
                        $data->Modelo,
                        $data->Carroceria,
                        $data->Marca,
                        $data->Tipologia
                    )
                );

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

}