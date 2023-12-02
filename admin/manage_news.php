	<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Manage News</h1>
              <div>
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>No</th>
				<th>Title</th>
				<th>Subtitle</th>
				<th>Body</th>
				<th>Date Upload</th>
				<th>Image</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
		<a class="btn btn-dark text-white" href="?page=insert_news">Add Data</a><br>
	<?php
include "koneksi.php";
$query="SELECT * FROM tb_news ORDER BY id_news DESC";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "<br>Data : ".$jum."<br><br>";

while ($data=mysqli_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><span class="d-inline-block text-truncate" style="max-width: 100px;"><?php echo $data['title'];?></span></td>
		<td><span class="d-inline-block text-truncate" style="max-width: 100px;"><?php echo $data['subtitle'];?></span></td>
		<td><span class="d-inline-block text-truncate" style="max-width: 100px;"><?php echo $data['body'];?></span></td>
		<td><?php echo $data['date_upload'];?></td>
		<td><img src="../img/news/<?php echo $data['image'];?>" width="150px"> </td>
		<td><a href="?page=detail_news&id_news=<?php echo $data['id_news'];?>">Detail</a></td>
		<td><a href="?page=update_news&id_news=<?php echo $data['id_news'];?>">Update</a></td>
		<td><a href="?page=delete_news&id_news=<?php echo $data['id_news'];?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php
}
?>
</tbody>
</table>
</div>