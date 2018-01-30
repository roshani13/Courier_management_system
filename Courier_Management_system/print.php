<?php
require('receipt.php');

$pdf = new index();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Entrynumber');
$pdf->Cell(40,10,'Name');
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>