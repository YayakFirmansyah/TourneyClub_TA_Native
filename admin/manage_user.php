	<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Manage User</h1>
              
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
			<tr style="text-align: center;">
				<th width="10px">No</th>
				<th>Id User</th>
				<th>Username</th>
				<th>Level</th>
				<th>Image Profile</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
	<?php
include "koneksi.php";
$query="SELECT * FROM tb_user";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "<br>Data : ".$jum."<br><br>";

while ($data=mysqli_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['id_user'];?></td>
		<td><?php echo $data['username'];?></td>
		<td><?php echo $data['level'];?></td>
		<td><img src="../img/profile/<?php echo $data['image'];?>" width="150px"> </td>
		<td style="text-align: center;"><a href="?page=detail_user&id_user=<?php echo $data['id_user'];?>">Detail</a></td>
		<td style="text-align: center;"><a href="?page=delete_user&id_user=<?php echo $data['id_user'];?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php
}
?>
</tbody>
</table>
</div>