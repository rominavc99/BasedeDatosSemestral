<?php //etiqueta php

class Bd {
    private static $conexion=NULL;
    private function __construct(){} //precarga informacion para el uso de la conexion

    public static function conectar(){
        $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; //cachar exepecion si existe error
        self::$conexion = new PDO('mysql:host=localhost;dbname=biblioteca','root','',$pdo_option); //cadena de conexion con PDO
        return self::$conexion;
    }

}


?>