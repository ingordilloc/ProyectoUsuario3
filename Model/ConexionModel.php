<?php

namespace Model;

    class ConexionModel{
        public static function conectar(){
            $conn = new \PDO("mysql:host=localhost;dbname=cursos; port=3307","root","");
                            
            return $conn;
        }

    }

?>