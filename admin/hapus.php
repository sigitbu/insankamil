<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "coba2";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id_peserta'];
mysqli_query($koneksi,"delete from m_client where id_client ='$id' ")or die(mysqli_error());

header("location:daftar_peserta.php?pesan=hapus");
?>