<?php

include "koneksi.php";
$id=$_GET['id_user'];
$query="DELETE FROM tb_user WHERE id_user='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=manage_user"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>