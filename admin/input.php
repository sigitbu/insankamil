<?php 
include '../koneksi.php';
$id = $_POST['id_client'];
$user = $_POST['username'];
$pass = $_POST['password'];
$status = 'aktif';
$level = 'user';

$query="INSERT INTO mlogin SET id_client='$id',username='$user',password='$pass',level='$level',status='$status'";
mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));

header("location:datalogin.php");

?>