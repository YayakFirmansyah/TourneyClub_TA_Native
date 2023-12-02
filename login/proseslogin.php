<?php
session_start();
include "koneksi.php";

$email			= $_POST['email'];
$password		= $_POST['password'];
$level			= "user";
$kirim			= $_POST['submit'];

$pengacak		= "124n170m";
$password_acak	= md5($pengacak.md5($password).$pengacak);

$query	= "SELECT * FROM tb_user WHERE email='$email' and password='$password_acak'";
$hasil	= mysqli_query ($koneksi, $query);

$cek	= mysqli_num_rows ($hasil);

if ($cek > 0) {
	$data = mysqli_fetch_array ($hasil);

	if ($data['level'] == "admin") {

		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";

		header("location:../admin/index.php");
	}

	elseif ($data['level'] == "user") {

		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";

		header("location:../index.php");
	}
	else{

		header("location:login.php?message=fail");
	}
}
else{
	header("location:login.php?message=fail");
}
?>
