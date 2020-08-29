<?php 
include '../koneksi.php';
$kat = $_POST['kategori'];
$query="INSERT INTO k_tes SET nama_ktes='$kat'";
mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));


// $query = mysqli_query($koneksi ," INSERT INTO m_client VALUES('','$nama','$tgl_lahir','$sekolah','$kelas','$jeniskel','$nis','$tglker')");
// if ($query == true){

    header("location:ktes.php");
// }else{
//     echo 'gagal';
// }
?>