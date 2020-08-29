<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama_ktes = $_POST['nama_ktes'];

mysqli_query($koneksi,"UPDATE k_tes SET 
            nama_ktes='$nama_ktes'
            WHERE id='$id'");

header("location:ktes.php");

?>