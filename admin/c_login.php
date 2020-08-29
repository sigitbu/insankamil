<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(270,7,'TES KEPRIBADIAN SESEORANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'UNTUK TK/SD',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,6,'Nama Peserta',1,0);
$pdf->Cell(40,6,'Username',1,0);
$pdf->Cell(28,6,'password',1,1);


$pdf->SetFont('Arial','',10);

include '../koneksi.php';
$mahasiswa = mysqli_query($koneksi,"SELECT *
FROM mlogin
INNER JOIN m_client USING (id_client) where status = 'aktif' and level= 'user'")or die(mysqli_error());
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(70,10,$row['nama'],1,0);
    $pdf->Cell(40,10,$row['username'],1,0);
    $pdf->Cell(28,10,$row['password'],1,1);
    
}

$pdf->Output();
?>
