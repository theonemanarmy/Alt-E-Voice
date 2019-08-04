<?php

class Utils{
    
    public static function mostrarErrores($errores, $campo){
        $alert = '';

        if(isset($errores[$campo]) && !empty($campo)){
            $alert = "<div class='alert-red'>".$errores[$campo]."</div>";
        }

        return $alert;
    } 

    public static function deleteSession($name){

        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }

    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".url_project);
        }else{
            return true;
        }
    }

    public static function isIdentity(){
        if(!isset($_SESSION['identity'])){
            header("Location:".url_project);
        }else{
            return true;
        }
    }

}