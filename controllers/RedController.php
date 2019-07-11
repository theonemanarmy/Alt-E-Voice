<?php

require_once 'models/red.php';

class redController{
    public function ver(){
        Utils::isAdmin();

        $net = new Network();
        $networks = $net->getAll();

        require_once 'views/red/ver.php';
    }
}