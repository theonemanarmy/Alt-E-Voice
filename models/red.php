<?php

class Network{
    private $id;
    private $usuario_id;
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
        $this->id = $this->db->real_escape_string($id);

        return $this;
    }

    /**
     * Get the value of usuario_id
     */ 
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     *
     * @return  self
     */ 
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $this->db->real_escape_string($usuario_id);

        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $this->db->real_escape_string($name);

        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $this->db->real_escape_string($password);

        return $this;
    }

    public function getAll(){
        $sql = "SELECT id, nombre FROM redes";
        $networks = $this->db->query($sql);

        return $networks;
    }
}