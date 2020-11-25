<?php

    require_once('conexion.php');

    class CrudLibro{
        //constructor de la clase
        public function __construct(){}

        //metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($libro){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO libros value(NULL, :titulo, :autor, :edicion)');
            $insert->bindValue('titulo',$libro->getNombre());
            $insert->bindValue('autor',$libro->getAutor());
            $insert->bindValue('edicion',$libro->getEdicion());
            $insert->execute();
        }
    }
?>