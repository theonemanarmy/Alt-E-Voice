<?php
require_once 'models/peticion.php';

class peticionesController{
    public function index(){
        echo "Controlador Peticiones, acción index";
    }

    public function ver(){
        Utils::isAdmin();

        $pet = new Petition();
        $petitions = $pet->getAllPetitions();

        require_once 'views/peticiones/ver.php';
    }
}