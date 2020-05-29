<?php
include "koneksi.php";
require('../Phpfpdf/fpdf.php');
$no=0;
$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(275,7,'LAPORAN BLABLABLANJA',0,1,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(275,7,'TABEL IKLAN',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(90,6,'NAMA BARANG',1,0);
$pdf->Cell(57,6,'HARGA',1,0);
$pdf->Cell(55,6,'KATEGORI',1,0);
$pdf->Cell(55,6,'PENJUAL',1,1);

$pdf->SetFont('Arial','',10);

$iklan = mysqli_query($mysqli, "select * from iklan");
while ($row = mysqli_fetch_array($iklan)){
	$no++;
    $pdf->Cell(10,6,$no,1,0);
    $pdf->Cell(90,6,$row['namabar'],1,0);
    $pdf->Cell(57,6,$row['harga'],1,0);
    $pdf->Cell(55,6,$row['kategori'],1,0);
	$pdf->Cell(55,6,$row['penjual'],1,1);
}

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(70,7,'TABEL KATEGORI',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(40,6,'KATEGORI',1,0);
$pdf->Cell(20,6,'JUMLAH',1,1);

$pdf->SetFont('Arial','',10);

$kategori = mysqli_query($mysqli, "select * from kategori");
while ($buff = mysqli_fetch_array($kategori)){
    $pdf->Cell(10,6,$buff['id'],1,0);
    $pdf->Cell(40,6,$buff['kategori'],1,0);
    $pdf->Cell(20,6,$buff['jumlah'],1,1);
}

$pdf->Output();
?>