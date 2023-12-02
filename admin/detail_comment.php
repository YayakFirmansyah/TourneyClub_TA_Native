<?php

include "koneksi.php";
$id=$_GET['id_comment'];
$query="SELECT * FROM tb_comment WHERE id_comment='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>

<h1 class="h3 mb-4 text-gray-800">Manage Comment</h1>
	<div class="container">
		<form>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<th colspan="3" style="text-align: center;"><h4>Detail Comment</h4></th>
	</tr>
	</thead>
	<tr>
		<td>Body</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['body']?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['email']?></td>
	</tr>
	<tr>
		<td>Id Tournament</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['id_tournament']?></td>
	</tr>
	<tr>
		<td colspan="3"><a href="?page=manage_comment" class="btn btn-dark text-white">Back</a></td>
	</tr>
</table>
</form>
</div>
