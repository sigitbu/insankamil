<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',22);
// mencetak string 
$pdf->Cell(270,12,'TES KEPRIBADIAN SESEORANG',0,1,'C');
$pdf->SetFont('Arial','B',20);
$pdf->Cell(270,12,'UNTUK SMA/SMK/UMUM',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,12,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,12,'no',1,0);
$pdf->Cell(70,12,'Nama',1,0);
$pdf->Cell(100,6,'TES A',1,0);
$pdf->Cell(100,6,'TES B',1,0);
$pdf->Cell(0,6,'',0,1);


$pdf->Cell(80,6,'',0,0);
$pdf->Cell(50,6,'Benar',1,0);
$pdf->Cell(50,6,'Salah',1,0);
$pdf->Cell(50,6,'Benar',1,0);
$pdf->Cell(50,6,'Salah',1,0);


$pdf->SetFont('Arial','',10);

include "../koneksi.php";
					$nomor = 1;
					$idc = mysqli_query($koneksi,"SELECT DISTINCT(id_client) as id ,m_client.nama FROM m_hasil  INNER JOIN m_client USING (id_client)")or die(mysqli_error());
					
					
					 while($t=mysqli_fetch_array($idc)){
					 	$id = $t['id'];
					 	$nama = $t['nama'];
					 	$q1=mysqli_query($koneksi,"select sum(benar)as benar,sum(salah)as salah from m_hasil where id_ktes in('1','2',3,4)");
					 	$fe1=mysqli_fetch_array($q1);

					 	$q2=mysqli_query($koneksi,"select sum(benar)as benar,sum(salah)as salah from m_hasil where id_ktes in('5','6',7,8)");
					 	$fe2=mysqli_fetch_array($q2);
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
			$pdf->Cell(10,12,$nomor++,1,0);
			$pdf->Cell(70,12,$nama,1,0);
			$pdf->Cell(50,12,$fe1['benar'],1,0);
			$pdf->Cell(50,12,$fe1['salah'],1,0);
			$pdf->Cell(35,12,$fe2['benar'],1,0);
			$pdf->Cell(35,12,$fe2['salah'],1,0);
   
}

}
$pdf->Output();
?>
