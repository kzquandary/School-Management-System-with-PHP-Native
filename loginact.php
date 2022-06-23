<?php
session_start();

include 'classes/connection.classes.php';
if (!isset($_POST['kode_login']) && !isset($_POST['password'])) {
	header('Location: login.php');
} else {
	$kode_login = $_POST['kode_login'];
	$password = md5($_POST['password']);

	$data = mysqli_query($con, "SELECT * FROM user WHERE kode_login='$kode_login' and password='$password'");

	$cek = mysqli_num_rows($data);
	$cekstatus = mysqli_fetch_array($data);
	$cekuname = mysqli_query($con, "SELECT * FROM user WHERE kode_login='$kode_login'");
	$rowuname = mysqli_num_rows($cekuname);
	if ($cek > 0) {
		if ($cekstatus['status'] == '1') {
			$_SESSION['kode_login'] = $kode_login;
			$_SESSION['status'] = "1";
			header("location:index.php");
		} else if ($cekstatus['status'] == '2') {
			$_SESSION['kode_login'] = $kode_login;
			$_SESSION['status'] = "2";
			header("location:index.php");
		} else if ($cekstatus['status'] == '3') {
			$_SESSION['kode_login'] = $kode_login;
			$_SESSION['status'] = "3";
			header("location:index.php");
		}
	} else if ($rowuname == 0) {
		header("location:login.php?pesan=usernotfound");
	} else {
		header("location:login.php?pesan=gagal");
	}
}
