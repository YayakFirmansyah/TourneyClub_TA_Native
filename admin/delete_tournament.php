<?php

include "koneksi.php";
$id=$_GET['id_tournament'];
$query="DELETE FROM tb_tournament WHERE id_tournament='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=manage_tournament"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>