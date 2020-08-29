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
$pdf->Cell(270,7,'UNTUK SMA/SMK/UMUM',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Nis',1,0);
$pdf->Cell(70,6,'Nama Lengkap',1,0);
$pdf->Cell(30,6,'Tanggal Lahir',1,0);
$pdf->Cell(48,6,'Sekolah',1,0);
$pdf->Cell(60,6,'Kelas/Jurusan',1,0);
$pdf->Cell(25,6,'Jenis Kelamin',1,1);

$pdf->SetFont('Arial','',10);

include '../koneksi.php';
$mahasiswa = mysqli_query($koneksi,"SELECT * FROM m_client")or die(mysqli_error());
while ($row = mysqli_fetch_array($mahasiswa)){
	$pdf->Cell(20,10,$row['nis'],1,0);
    $pdf->Cell(70,10,$row['nama'],1,0);
    $pdf->Cell(30,10,$row['tgl_lahir'],1,0);
    $pdf->Cell(48,10,$row['sekolah'],1,0);
    $pdf->Cell(60,10,$row['kelas'],1,0);
    $pdf->Cell(25,10,$row['jenis_kelamin'],1,1);
     
}

$pdf->Output();
?>
