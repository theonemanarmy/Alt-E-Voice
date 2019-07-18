<?php

require_once 'models/red.php';

class redController
{
    public function ver()
    {
        Utils::isAdmin();

        $usuario_id = $_SESSION['identity']->id;

        $net = new Network();
        $net->setUsuario_id($usuario_id);
        $networks = $net->getAll();

        require_once 'views/red/ver.php';
    }
}
