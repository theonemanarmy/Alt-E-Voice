<?php ob_start();
/*
    su función es agarrar datos por la url, y ver a que controlador pertenece 
    cargar su objeto o crearlo y llamar al metodo correspondiente
*/
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php'; 

function showError(){
    $error = new errorController;
    $error->index();
}

if(isset($_GET['controller'])){
    $name_controller = $_GET['controller'].'Controller';
}

elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $name_controller = controller_default;
}

else{
    show_error();
    exit();
}

if(class_exists($name_controller)){
    $controller = new $name_controller;

    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();
    }

    elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controller->$action_default();
    }

    else{
        showError();
    }
}else{
    showError();
}

require_once 'views/layout/footer.php'; 

ob_end_flush();