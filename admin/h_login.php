<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "client";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
mysqli_query($koneksi,"delete from mlogin where id ='$id' ")or die(mysqli_error());

header("location:datalogin.php?pesan=hapus");
?>