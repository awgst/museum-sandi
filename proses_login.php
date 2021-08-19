<?php
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	if ($email=="admin"&&$pass="admin") {
		$_SESSION['login']="login";
		$_SESSION['nama']="admin";
		header("location: admin/index.php");
	}
	else{
		header("location:index.php?pesan=gagal");
	}
?>