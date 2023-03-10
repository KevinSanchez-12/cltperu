<?php
require('fpdf.php');
require('makefont/makefont.php');
class PDF extends FPDF
{
function Header()
{
    /* $this->Image('assets/img/logos/0007.png',10,10,50);
    $this->Cell(67);
    $this->SetFont('times','B',30);
    $this->SetTextColor(175, 4, 12);
    $this->Cell(55,50,utf8_decode('Membership Certificate'),0,0,'C');
    $this->Ln(12);

    $this->SetFont('Arial','B',16);
    $this->SetTextColor(208, 146, 0);
    $this->Cell(57);
    $this->Cell(75,53,utf8_decode('¡Members achieve great thing!'),0,0,'C');
    $this->Ln(13);

    $this->SetFont('Arial','',12);
    $this->SetTextColor(0,0,0);
    $this->Cell(57);
    $this->Cell(75,53,utf8_decode('Below is a digital version of your membership card of the CIDI International Organization.'),0,0,'C');
    $this->Ln(13);

    $this->SetFont('Arial','B',14);
    $this->SetTextColor(175, 4, 12);
    $this->Cell(57);
    $this->Cell(75,53,utf8_decode('Awarded to:'),0,0,'C');
    $this->Ln(13); */
}
function Footer()
{
    /* $this->SetY(-15);
    $this->SetFont('Arial','',10);
    $this->SetTextColor(0,0,0);
    $this->Cell(45);
    $this->Cell(100,10,utf8_decode('Make the most of your membership - Learn about these and all CIDI member benefits at www.cidi.org.pe/memberships'),0,0,'C'); */
}
}
require 'database/bd.php';
$dni = $_GET["dni"];
$consulta = "SELECT * FROM colegiados WHERE dni='$dni'";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
   /*  $pdf->Ln(25);
    $pdf->SetFont('Arial','',35);
    $pdf->SetTextColor(208, 146, 0);
    $pdf->Cell(190,10,utf8_decode($row['nombre']),0,1,'C');
    $pdf->Ln(7);
    $pdf->Cell(190,10,utf8_decode($row['apellido']),0,0,'C');
    $pdf->Ln(17);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('Identified with ID / Passport:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,10,utf8_decode($row['dni']),0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('Campus:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,10,utf8_decode($row['pais']),0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('In mention of:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,10,utf8_decode($row['carrera']),0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('Validity Date:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $fechaactual = $row['fechaIncor'];
    $nuevafecha = strtotime ( '+1 year' , strtotime ( $fechaactual ) ) ;
    $nuevafecha = date ( 'Y-m-d' , $nuevafecha );
    $pdf->Cell(190,10,utf8_decode($row['fechaIncor']." / ".$nuevafecha),0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('Membership Type:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,10,utf8_decode($row['tipo']),0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,10,utf8_decode('Condition:'),0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,10,utf8_decode($row['condicion']),0,1,'C'); */
    // $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(47,10,utf8_decode('ID o Passport'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Names'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Surnames'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Gender'),1,1,'C');
    // $pdf->SetFont('Arial','',10);
    // $pdf->Cell(47,10,utf8_decode($row['dni']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['nombre']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['apellido']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['genero']),0,1,'C');
    // $pdf->Ln(5);
    // $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(47,10,utf8_decode('Date of birth'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Nationality'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Career'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('E-mail'),1,1,'C');
    // $pdf->SetFont('Arial','',10);
    // $pdf->Cell(47,10,utf8_decode($row['fechaNac']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['pais']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['carrera']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['correo']),0,1,'C');
    // $pdf->Ln(5);
    // $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(47,10,utf8_decode('Campus'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('ORCID'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Incorporation date'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Membership Type'),1,1,'C');
    // $pdf->SetFont('Arial','',10);
    // $pdf->Cell(47,10,utf8_decode($row['sede']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['orcid']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['fechaIncor']),0,0,'C');
    // $pdf->Cell(47,10,utf8_decode($row['tipo']),0,1,'C');
    // $pdf->Ln(5);
    // $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(47,10,utf8_decode('Condition'),1,0,'C');
    // $pdf->Cell(47,10,utf8_decode('Photo'),1,1,'C');
    // $pdf->SetFont('Arial','',10);
    // $pdf->Cell(47,10,utf8_decode($row['condicion']),0,0,'C');
    //$pdf->Image($row['foto'],50,50,30);

    /* $pdf->Ln(0);
    $pdf->SetFont('Arial','',12);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(80);
    $pdf->Image('assets/img/etc/firma.png',91,243,30);
    $pdf->Ln(8);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(190,5,utf8_decode('______________'),0,1,'C');
    $pdf->Ln(3);
    $pdf->Cell(190,2,utf8_decode('Graciela Quispe Gonzales'),0,1,'C');
    $pdf->Ln(2);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(190,5,utf8_decode('Administration Office'),0,0,'C'); 
    $pdf->Ln(4);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(190,7,utf8_decode('Centro de Investigación y Desarrollo Intelectual'),0,1,'C');
    $pdf->Ln(-1);
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(190,5,utf8_decode('www.cidi.org.pe'),0,0,'C'); 
    $pdf->Ln(20);
    $pdf->Image('assets/img/etc/qr.png',180,2,25);
    $pdf->Image('assets/img/etc/sello.png',115  ,234,25); */
    
}
$pdf->Output();
