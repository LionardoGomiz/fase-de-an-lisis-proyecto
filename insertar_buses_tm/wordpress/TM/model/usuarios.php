<?php
class buses
{
    private $pdo;
    public $id;
    public $correo;
    public $contrasena;
    public $tipo_usuario;

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

            $stm = $this->pdo->prepare("SELECT * FROM usuarios");
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
                ->prepare("SELECT * FROM usuarios WHERE id = ?");
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
                ->prepare("DELETE FROM usuarios WHERE id = ?");
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
            $sql = "UPDATE usuarios SET 
						correo      		= ?,
						contrasena          = ?,
						tipo_usuario        = ?	
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->correo,
                        $data->contrasena,
                        $data->tipo_usuario,
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
            if (@$_POST['AgregarUsuario'])
            {
                $sql = "INSERT INTO vehiculos (correo,contrasena,tipo_usuario) 
                VALUES('$_POST[correo]','$_POST[contrasena]','$_POST[tipo_usuario]')";
            }

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->correo,
                        $data->contrasena,
                        $data->tipo_usuario
                    )
                );

        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

}