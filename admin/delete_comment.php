<?php

include "koneksi.php";
$id=$_GET['id_comment'];
$query="DELETE FROM tb_comment WHERE id_comment='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=manage_comment"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>