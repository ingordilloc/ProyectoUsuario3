<?php
namespace Controller\Trait\Categoria;

require 'vendor/autoload.php';

use Controller\PDF;


trait pdfCategoria{
    public function pdfCategorias() { 
        
        $categoriasALLDB = $this->mostrar();
        $pdf= new PDF();
        $pdf->title="categoria";
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        foreach($categoriasALLDB as $categoria){
            $pdf->Cell(0,10,$categoria["id"]." ".$categoria["categoria"],0,1);
        }
        ob_end_clean();//Limpiar las etiquetas del header
        $pdf->Output();
        
    }

}





