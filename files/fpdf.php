<?php
require('C:\xampp\htdocs\directorioTelefonico\libs\fpdf\fpdf.php');
//$con=conectar();
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Mi primera página pdf con FPDF!');
$pdf->Output();
?>