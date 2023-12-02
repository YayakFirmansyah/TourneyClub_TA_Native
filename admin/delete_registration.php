<?php

include "koneksi.php";
$id=$_GET['id_registration'];
$query="DELETE FROM tb_regist WHERE id_regist='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=manage_registration"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>