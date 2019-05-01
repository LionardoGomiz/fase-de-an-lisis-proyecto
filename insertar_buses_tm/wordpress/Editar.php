<?php
require_once 'model/database.php';



$controller = 'bus';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['eb']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Editar();

}
else {
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['eb']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func(array($controller, $accion));



}


