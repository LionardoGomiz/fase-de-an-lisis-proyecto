<?php
include_once('PDF.php');
$pdf = new PDF();

$pdf->AddPage();

//Títulos que llevará la cabecera
$miCabecera = array('Movil','Operador','Modelo','Carroceria','Marca','Tipologia');

//Métodos llamados con el objeto $pdf
$pdf->cabeceraVertical($miCabecera);
$pdf->cabeceraHorizontal($miCabecera);


$pdf->Output(); //Salida al navegador
?>
