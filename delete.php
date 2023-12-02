<?php

include "koneksi.php";
	@$session = $_SESSION['email'];
$idRegist = $_GET['id_regist'];
$query="DELETE FROM tb_regist WHERE email='$session' AND id_regist = '$idRegist' ";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=notification&id_user=<?php echo $data_user['id_user'];?>"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>