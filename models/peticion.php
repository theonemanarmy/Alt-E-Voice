<?php

class Petition{
    private $id;
    private $usuario_id;
    private $texto;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
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

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $this->db->real_escape_string($texto);

        return $this;
    }

    public function getAllPetitions(){
        $sql = "SELECT p.* FROM peticiones p "
        ."WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC;";
        $petitions = $this->db->query($sql);

        return $petitions;
    }
}