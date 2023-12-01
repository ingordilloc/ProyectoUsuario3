<?php
namespace Controller;
use Model\CategoriaModel;
use Controller\PDF;
use Controller\Trait\Categoria\pdfCategoria;

class CategoriaController
{
    use pdfCategoria;
    

    public static function mostrar()
    {
        $inscripcion = CategoriaModel::mostrarCategoria();
        return $inscripcion;
    }

    public function mostrarCursos(){
        if (!empty($_POST['idcategoria'])){
            $cursos = CategoriaModel::mostrarCursosCategoria($_POST['idcategoria']);
            return $cursos;
        }
    }

}
?>