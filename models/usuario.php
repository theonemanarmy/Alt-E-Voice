<?php

class User{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $date;
    private $rol;
    private $image;
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
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $this->db->real_escape_string($firstname);

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $this->db->real_escape_string($lastname);

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost'=>4]);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $this->db->real_escape_string($date);

        return $this;
    }

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $this->db->real_escape_string($rol);

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $this->db->real_escape_string($image);

        return $this;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(null, '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getEmail()}', '{$this->getPassword()}', CURDATE(), 'admin', null);";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }

    public function login(){
        if(isset($_POST)){
            $result = false;
            $email = $this->email;
            $password = $this->password;

            $sql = "SELECT * FROM usuarios WHERE email = '$email'";
            $login = $this->db->query($sql);

            if($login && $login->num_rows == 1){
                $usuario = $login->fetch_object();

                //verificar contraseña
                $verify = password_verify($password, $usuario->password);
                if($verify){
                    $result = $usuario;
                }
            }
            return $result;
        }
    }
}