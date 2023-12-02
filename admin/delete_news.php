<?php

include "koneksi.php";
$id=$_GET['id_news'];
$query="DELETE FROM tb_news WHERE id_news='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);

if ($hasil)
	{
		?>
		<script language="javascript">document.location.href="?page=manage_news"</script>
		<?php
	}	
else
	{ 
		echo "Can't delete data!";
	}
?>