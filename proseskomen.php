<?php
	if (isset($_POST['submit'])) {
		include "koneksi.php";
		@$body	= $_POST['message'];
		@$id_tournament = $_POST['id'];
		@$username = $_POST['username'];

		$query = "INSERT INTO `tb_comment`(`body`, `email`, `id_tournament`) VALUES ('$body', '$username', '$id_tournament')";
		$hasil = mysqli_query($koneksi,$query);	
		?><script type="text/javascript">history.go(-1)</script><?php
	}
	else {
    ?><script language="javascript">document.location.href="login/login.php"</script><?php
	}
									
?>