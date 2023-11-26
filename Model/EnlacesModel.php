<?php
namespace Model;

class EnlacesModel{
    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio"=> "View/inicio.php",
            "contacto"=> "View/contacto.php",
            "nosotros"=> "View/nosotros.php",
            "inscripcion"=> "View/inscripcion.php",
            "mostrar"=> "View/mostrarInscripcion.php",
            "editarInscripcion"=> "View/editarInscripcion.php",
            "eliminarInscripcion"=> "View/eliminarInscripcion.php",
            "login" => "View/login.php",
            "logout" => "View/logout.php",
            "inscripcioncategoria" => "View/inscripcioncategoria.php",
            "crearUsuarioEstudiante" => "View/nuevoUsuario.php",
            "grafico" => "View/grafica.php",
            "mostrarTablas" => "View/mostrarTablas.php",
            "PDF" => "View/pdf.php",
            default => "View/error.php"
        };
        return $modulo;
    }
        
    }
//Pagina en blanco con las paginas que funcionan

?>