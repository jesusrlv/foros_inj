<?php
session_start();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $pdf->MultiCell(0,9, $pdf->Image("../img/logos_pej2022.png", $pdf->GetX()+5, $pdf->GetY()+3, 180) ,0,"C");

    $this->Image('logos_pej2022.png',5,0,200);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    // $this->Cell(30,10,utf8_decode('Constancia de participación'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    // $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('fondo_pej2022.png','0','0','250','300','PNG');
// $pdf->MultiCell(190,9, $pdf->Image("../img/logos_pej2022.png", $pdf->GetX()+5, $pdf->GetY()+3, 180) ,0,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Multicell(190,8,utf8_decode('


El Gobierno del Estado a través del Instituto de la Juventud del Estado de Zacatecas'),0,'C',0);
$pdf->Multicell(190,8,utf8_decode('
Otorga la presente 
'),0,'C',0);
$pdf->SetFont('Arial','B',21);
$pdf->SetTextColor(131,39,43); 
$pdf->Multicell(190,8,utf8_decode('
C O N S T A N C I A'),0,'C',0);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0); 
$pdf->Multicell(190,8,utf8_decode('a:
'.$nombre.' '.$apellido.'

'),0,'C',0);
$pdf->SetFont('Arial','B',10);
// $pdf->Cell(0,12,'Estimado(a) participante, '.utf8_decode($nombre).' '.utf8_decode($apellido).'  ',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Multicell(190,9,utf8_decode('Por su destacada participación en la Consulta Juvenil 2022 << Zacatecas te escucha >>, espacio que permitió a las juventudes del Estado, mediante un proceso incluyente e igualitario, escuchar, opinar y aportar vías de solución a las problemáticas prioritarias que afectan su entorno, para la construcción del Programa Estatal de Juventud.

¡Nunca más un Zacatecas sin sus juventudes!


'),0,'C',0);
$pdf->SetFont('Arial','I',10);
$pdf->Multicell(190,9,utf8_decode('Lo mejor de esta tierra eres tú'),0,'C',0);

$pdf->SetFont('Arial','I',10);
$pdf->Multicell(190,9,'En la ciudad de Zacatecas, Zac., septiembre de 2022.',0,'C',0);
$pdf->MultiCell(190,9, $pdf->Image("rubrica.png", $pdf->GetX()+20, $pdf->GetY()+1, 150) ,0,"C",0);
//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(190,8,'DIRECTOR GENERAL
INSTITUTO DE LA JUVENTUD 
DEL ESTADO DE ZACATECAS',0,'C',0);

// $pdf->Output();
$modo="I";
$nombre_archivo="constancia_Foros_INJUVENTUD_".$nombre."_".$apellido.".pdf";
$pdf->Output($nombre_archivo,$modo);  

?>