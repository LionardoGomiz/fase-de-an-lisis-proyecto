<?php
require_once 'model/database.php';

$controller = 'bus'; //llamammos al controlador

// Todo esta lógica hara el papel de un FrontController
    if(!isset($_REQUEST['ab']))
{
    require_once "controller/$controller.controller.php";//instanciamos al controlador
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();



}
else {
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['ab']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func(array($controller, $accion));
}



















