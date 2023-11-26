<?php
namespace Controller;
require 'vendor/autoload.php';

//use FPDF;
use Fpdf\Fpdf as FpdfFpdf;

class PDF extends FpdfFpdf //extends heredo la clase a las librerias
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/logo_intecap.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

class PdfController{
    
    public function generate(){
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);

        //Llamar a un controlador y obtener datos de la BD
        // Usuarios -> Obtengo listado
        for($i=1;$i<=40;$i++){
            $pdf->Cell(0,10,'Printing line number '.$i,0,1);
        }     

        ob_start();
        $pdf->Output();
        ob_end_flush(); 
    }
}
?>