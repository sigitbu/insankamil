<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$sekolah = $_POST['sekolah'];
$kelas = $_POST['kelas'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi,"UPDATE m_client SET
			nis ='$nis',
			nama ='$nama',
            tgl_lahir='$tgl_lahir',
            sekolah='$sekolah',
            kelas='$kelas', 
            jenis_kelamin='$jenis' 
            WHERE id_client='$id'");

header("location:daftar_peserta.php?pesan=update");

?>