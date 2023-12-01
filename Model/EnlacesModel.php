<?php
namespace Model;

class EnlacesModel{
    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio"=> "View/paginas/inicio.php",
            "contacto"=> "View/paginas/contacto.php",
            "nosotros"=> "View/paginas/nosotros.php",
            "inscripcion"=> "View/inscripcion/inscripcion.php",
            "mostrar"=> "View/inscripcion/mostrarInscripcion.php",
            "editarInscripcion"=> "View/inscripcion/editarInscripcion.php",
            "eliminarInscripcion"=> "View/inscripcion/eliminarInscripcion.php",
            "login" => "View/usuarios/login.php",
            "logout" => "View/usuarios/logout.php",
            "inscripcioncategoria" => "View/inscripcion/inscripcioncategoria.php",
            "crearUsuarioEstudiante" => "View/usuarios/nuevoUsuario.php",
            "grafico" => "View/extras/grafica.php",
            "mostrarTablas" => "View/extras/mostrarTablas.php",
            "PDF" => "View/extras/pdf.php",
            "pdfCategoria" => "View/categorias/pdfCategorias.php",
            "pdfUsuarios" => "View/usuarios/pdfUsuarios.php",
            default => "View/paginas/error.php"
        };
        return $modulo;
    }
        
    }
//Pagina en blanco con las paginas que funcionan

?>