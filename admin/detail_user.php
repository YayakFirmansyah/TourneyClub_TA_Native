<?php

include "koneksi.php";
$id=$_GET['id_user'];
$query="SELECT * FROM tb_user WHERE id_user='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>

<h1 class="h3 mb-4 text-gray-800">Manage User</h1>
	<div class="container">
		<form>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<th colspan="3" style="text-align: center;"><h4>Detail User</h4></th>
	</tr>
	</thead>
	<tr>
		<td>Username</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['username']?></td>
	</tr>
	<tr>
		<td>Level</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['level']?></td>
	</tr>
	<tr>
		<td>About</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['about']?></td>
	</tr>
	<tr>
		<td>Date Birth</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['date_birth']?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td style="text-align: center;"> : </td>
		<td><img src="../img/profile/<?php echo $data['image']?>" width='150px'	></td>
	</tr>
	<tr>
		<td>Date Created</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['date_created']?></td>
	</tr>
	<tr>
		<td colspan="3"><a href="?page=manage_user" class="btn btn-dark text-white">Kembali</a></td>
	</tr>
</table>
</form>
</div>
