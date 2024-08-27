<?php


class Database{

    public static function connect(){

        $db = new mysqli('localhost','root','tienda');

        //conexion remota
        //$db = new mysqli ('localhost', u3abcdxyja123_admin_tienda...)
        
        $db-> query("SET NAMES 'utf8'");

        return $db;
    }
}