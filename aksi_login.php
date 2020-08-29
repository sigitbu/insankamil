<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from mlogin where username='$username' and password='$password' and status = 'aktif'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	
	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/dasboard.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		$kode = $data['id'];
		
		// buat session login dan username
		
		$_SESSION['id_client'] = $data['id_client'];
		$_SESSION['level'] = "user";
		$sql="update `mlogin` set status='tidak aktif' where `id`='$kode'";
		$up=mysqli_query($koneksi,$sql);


		// alihkan ke halaman dashboard pegawai
		header("location:user/aturan.php");

	// cek jika user login sebagai pengurus
	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}

	
}else{
	header("location:login.php?pesan=gagal");
}



?>