<?php

class Network{
    private $id;
    private $name;
    private $password;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;

        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;

        return $this;
    }

    public function getAll(){
        $sql = "SELECT id, nombre FROM redes";
        $networks = $this->db->query($sql);

        return $networks;
    }
}