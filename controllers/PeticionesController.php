<?php
require_once 'models/peticion.php';

class peticionesController{
    public function index(){
        echo "Controlador Peticiones, acción index";
    }

    public function ver(){
        Utils::isAdmin();

        $usuario_id = $_SESSION['identity']->id;

        $pet = new Petition();
        $pet->setUsuario_id($usuario_id);
        $petitions = $pet->getAllPetitions();

        require_once 'views/peticiones/ver.php';
    }
}