<?php

class Database{
    public static function connect(){
        $connection = new mysqli('localhost', 'root', '', 'altevoice_original');
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}