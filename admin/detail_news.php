<?php

include "koneksi.php";
$id=$_GET['id_news'];
$query="SELECT * FROM tb_news WHERE id_news='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>

<h1 class="h3 mb-4 text-gray-800">Manage Tournament</h1>
	<div class="container">
		<form>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<th colspan="3" style="text-align: center;"><h4>Detail News</h4></th>
	</tr>
	</thead>
	<tr>
		<td>Title</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['title']?></td>
	</tr>
	<tr>
		<td>Subtitle</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['subtitle']?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo nl2br($data['body']); ?></td>
	</tr>
	<tr>
		<td>Date Upload</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['date_upload']?></td>
	</tr>
	<tr>
		<td colspan="3"><a href="?page=manage_news" class="btn btn-dark text-white">Back</a></td>
	</tr>
</table>
</form>
</div>
