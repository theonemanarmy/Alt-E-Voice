<?php
require_once 'models/usuario.php';

class usuarioController
{
    public function index()
    {
        require_once 'views/layout/us.php';
    }

    public function register()
    {
        require_once 'views/usuario/register.php';
    }

    public function startLogin()
    {
        if (!isset($_SESSION['identity']) && !isset($_SESSION['admin'])) {
            require_once 'views/usuario/login.php';
        } else {
            echo "<h6 style='color:green;'>Actualmente estás logueado</h6>";
            header("refresh:1; url=" . url_project);
        }
    }

    public function save()
    {
        if (isset($_POST)) {

            $firstname =$_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confpassword = $_POST['confPassword'];

            $errores = array();

            if($firstname && $lastname && $email && $password && $confpassword){
                if(!empty($firstname) && !is_int($firstname) && strlen($firstname)>2 && strlen($firstname)<100){
                    $name_validate = true;
                }else{
                    $name_validate = false;
                    $errores['firstName'] = "Nombre no válido";
                }

                if(!empty($lastname) && !is_int($lastname) && strlen($lastname)>2 && strlen($lastname)<100){
                    $lastname_validate = true;
                }else{
                    $lastname_validate = false;
                    $errores['lastName'] = "Apellidos no válidos";
                }

                if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email)>2 && strlen($email)<120){
                    $email_validate = true;
                }else{
                    $email_validate = false;
                    $errores['email'] = "Email no válido";
                }

                if(!empty($password) && $password == $confpassword && strlen($password)>2 && strlen($password)<120){
                    $password_validate = true;
                }else{
                    $password_validate = false;
                    $errores['password'] = "Password no válida";
                }

                if(count($errores) == 0){
                    $usuario = new User();
                    $usuario->setFirstname($firstname);
                    $usuario->setLastname($lastname);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);
                    
                    var_dump($usuario);

                }else{
                    echo "errores";
                }
            }
        } 
    } //termina función save

    public function login()
    {
        if (isset($_POST)) {
            $usuario = new User();
            $usuario->setEmail($_POST['email-login']);
            $usuario->setPassword($_POST['password-login']);
            $identity = $usuario->login();

            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == "admin") {
                    $_SESSION['admin'] = true;
                }
                header("Location:" . url_project);
            } else {
                $_SESSION['error_login'] = "Identificación fallida";
                header("Location:" . url_project . 'usuario/startLogin');
            }
        }
    } //termina función login

    public function logout()
    {
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        header("Location:" . url_project);
    } //termina función logout


}//termina clase
