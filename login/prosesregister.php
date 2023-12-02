<?php
//enkripsi md5
include "koneksi.php";
$email			= $_POST['email'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$retype			= $_POST['retype'];
$level			= "user";
$kirim			= $_POST['submit'];
//acak password
$pengacak		= "124n170m";
$password_acak	= md5($pengacak.md5($password).$pengacak);

if ($password==$retype) {
	if ($kirim) {
		$query="INSERT INTO `tb_user` (`email`, `username`, `password`, `level`) VALUES ('$email', '$username', '$password_acak', '$level');";
		$hasil	= mysqli_query ($koneksi, $query);
		?><script language="javascript">document.location.href="login.php"</script><?php
	}
	else{
		?><script language="javascript">document.location.href="register.php"</script><?php
	}
}
else{
	?><script language="javascript">document.location.href="register.php"</script><?php
}
?>