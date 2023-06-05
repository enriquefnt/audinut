<?php
namespace ClassPart\Controllers;
use \ClassGrl\Fpdf;
use \AllowDynamicProperties;
#[AllowDynamicProperties]
class  Imprime extends Fpdf

{
// Page header
function Header()
{
    // Logo
   $this->Image('../imagenes/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(70);
    // Title
    $this->Cell(80,12,iconv('UTF-8', 'Windows-1252', 'Solicitud de nutroterápico'),1,0,'C');
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}'. 'Copia Impresa por: ' ,0,0,'C');
    }
}

