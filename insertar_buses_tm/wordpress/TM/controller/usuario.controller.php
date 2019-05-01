<?php
require_once 'model/usuarios.php';

class usuarioController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new usuario();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/usuarios/usuarios.php';
    }



    public function Editar()
    {
        $usuario = new usuario();

        if (isset($_REQUEST['id'])) {
            $usuario = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/usuarios/usuarios-editar.php';
    }

    public function Agregar()
    {
        $usuario = new usuario();

        if (isset($_REQUEST['id'])) {
            $usuario = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/usuarios/usuarios-agregar.php';
    }

    public function Guardar()
    {
        $usuario = new usuario();
        $usuario->id = $_REQUEST['id'];
        $usuario->correo = $_REQUEST['correo'];
        $usuario->contrasena = $_REQUEST['contrasena'];
        $usuario->tipo_usuario = $_REQUEST['tipo_usuario'];

        $usuario->id > 0
            ? $this->model->Actualizar($usuario)
            : $this->model->Registrar($usuario);

        header('Location: usuarios/index.php');

    }


    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ../view/index.php');
    }

}

