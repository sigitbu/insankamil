<?php 
include '../koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$sekolah = $_POST['sekolah'];
$kelas = $_POST['kelas'];
$jeniskel = $_POST['jeniskel'];
$tglker = $_POST['tglker'];


$query="INSERT INTO m_client SET nis='$nis',nama='$nama',sekolah='$sekolah',kelas='$kelas',jenis_kelamin='$jeniskel',tgl_tes='$tglker',tgl_lahir='$tgl_lahir'";
mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));


// $query = mysqli_query($koneksi ," INSERT INTO m_client VALUES('','$nama','$tgl_lahir','$sekolah','$kelas','$jeniskel','$nis','$tglker')");
// if ($query == true){

    header("location:daftar_peserta.php");
// }else{
//     echo 'gagal';
// }
?>