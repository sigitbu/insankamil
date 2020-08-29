<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['id_client'];
$username = $_POST['username'];
$password = $_POST['password'];
$status =  "aktif";

mysqli_query($koneksi,"UPDATE mlogin SET id_client ='$nama',
            username='$username',
            password='$password',
            status ='$status'
            WHERE id='$id'");

header("location:datalogin.php?pesan=update");

?>