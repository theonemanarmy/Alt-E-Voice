<?php

require_once 'models/red.php';

class redController
{
    public function ver()
    {
        Utils::isIdentity();

        $usuario_id = $_SESSION['identity']->id;

        $net = new Network();
        $net->setUsuario_id($usuario_id);
        $networks = $net->getAll();

        require_once 'views/red/ver.php';
    }//función ver

    public function delete(){
        Utils::isIdentity();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $net = new Network();
            $net->setId($id);
            $net = $net->delete();

            if($net){
                $_SESSION['delete-red'] = "complete";
            }else{
                $_SESSION['delete-red'] = "failed";
            }
        }

        header("Location:".url_project."red/ver");

    }//función borrar

}//fin de controlador
