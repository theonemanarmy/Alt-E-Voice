<?php
require_once 'models/usuario.php';

class usuarioController{
    public function index(){
        require_once 'views/layout/us.php';
    }

    public function register(){
        require_once 'views/usuario/register.php';
    }

    public function startLogin(){
        if(!isset($_SESSION['identity']) && !isset($_SESSION['admin'])){
            require_once 'views/usuario/login.php';
        }else{
            echo "<h6 style='color:green;'>Actualmente estás logueado</h6>";
            header("refresh:1; url=".url_project);
        }
    }

    public function save(){
        if(isset($_POST)){
             
            $firstname = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confpassword = $_POST['confPassword'];

            $errores = array();

            if(!empty($firstname) && !is_numeric($firstname)){
                $nombre_validado = true;
            }else{
                $nombre_validado = false;
                $errores['firstName'] = "El nombre no es válido";
            }

            if(!empty($lastname) && !is_numeric($lastname)){
                $apellidos_validados = true;
            }else{
                $apellidos_validados = false;
                $errores['lastName'] = "Los apellidos no son válidos";
            }

            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_validado = true;
            }else{
                $email_validado = false;
                $errores['email'] = "Correo no válido";
            }

            if(!empty($password) && $password == $confpassword){
                $password_validada = true;
            }else{
                $password_validada = false;
                $errores['password'] = "La contraseña no es válida";
            }

            if(count($errores) == 0){
                $usuario = new User();
                $usuario->setFirstname($firstname);
                $usuario->setLastname($lastname);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();

                if($save){
                   $_SESSION['register'] = "complete"; 
                }else{
                    $_SESSION['register'] = "failed";
                }
            }else{
                $_SESSION['errores'] = $errores;
            }
            
        }else{
            $_SESSION['register'] = "failed";  
        }
        header("Location:".url_project.'usuario/register');
    }//termina función save

    public function login(){
        if(isset($_POST)){
            $usuario = new User();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $identity = $usuario->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;

                if($identity->rol == "admin"){
                    $_SESSION['admin'] = true;
                }
                header("Location:".url_project);
            }else{
                $_SESSION['error_login'] = "Identificación fallida";
                header("Location:".url_project.'usuario/startLogin');
            }
        }

       
    }//termina función login

    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        header("Location:".url_project);
    }//termina función logout


}//termina clase