<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($dbconnect,"select * from tbl_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$_SESSION['username'] = $username;

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		 @$_SESSION['iduser'] = $data['id_user'];
		
		@$_SESSION['level'] = "admin";
		@$_SESSION['admin'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:menu.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="moderator"){
		// buat session login dan username
	 @$_SESSION['iduser'] = $data['id_user'];
		
		@$_SESSION['level'] = "moderator";
		@$_SESSION['moderator'] = "moderator";
		// alihkan ke halaman dashboard pegawai
		header("location:menu.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="user"){
		// buat session login dan username
		 @$_SESSION['iduser'] = $data['id_user'];
		
		@$_SESSION['level'] = "user";
		@$_SESSION['user'] = "user";
		// alihkan ke halaman dashboard pengurus
		header("location:menu.php");

	}else{
		$_SESSION['eror'] = "";
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	
}else{
	$_SESSION['eror'] = "username/password salah!";
		$_SESSION['error'] = "username/password salah!";
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
}

?>