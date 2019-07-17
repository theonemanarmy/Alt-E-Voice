<?php

class Database{
    public static function connect(){
        $connection = new mysqli('localhost', 'root', '', 'altevoice_2');
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}