<?php
namespace Model;

use Model\ConexionModel;

class GraficaModel{

    public static function mostrarDatos(){
        $stmt = ConexionModel::conectar()->prepare("SELECT curso, count(curso) as cantidad FROM inscripcion INNER JOIN curso on fkCurso = curso.id GROUP BY curso");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>