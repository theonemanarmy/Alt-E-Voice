<?php

require_once 'models/peticion.php';

class peticionesController
{
    public function index()
    {
        echo "Controlador Peticiones, acción index";
    }

    public function ver()
    {
        Utils::isAdmin();

        $usuario_id = $_SESSION['identity']->id;

        $pet = new Petition();
        $pet->setUsuario_id($usuario_id);
        $petitions = $pet->getAllPetitions();

        require_once 'views/peticiones/ver.php';
    }

    public function verForm()
    {
        require_once 'views/peticiones/insertar.php';
    }

    public function insertar()
    {
        Utils::isIdentity();
        if(isset($_GET['text'])){
            $usuario_id = $_SESSION['identity']->id;
            $text = $_GET['text'];

            $pet = new Petition();
            $pet->setUsuario_id($usuario_id);
            $pet->setTexto($text);
            $pet = $pet->insert();

            if($pet){
                $_SESSION['insert'] = "complete";
            }else{
                $_SESSION['insert'] = "failed";
            }
        }

        header("Location:".url_project."peticiones/verForm");
        
    } //función insertar

    public function delete(){
        Utils::isIdentity();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $pet = new Petition();
            $pet->setId($id);
            $pet = $pet->delete();

            if($pet){
                $_SESSION['delete-pet'] = "complete";
            }else{
                $_SESSION['delete-pet'] = "failed";
            }
        }

        header("Location:".url_project."peticiones/ver");
    }
}//termina peticionesController