	<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Manage Registration</h1>
              <div>
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>No</th>
				<th>Id Category</th>
				<th>Id User</th>
				<th>Payment</th>
				<th>Tournament Name</th>
				<th>Team Name</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
	<?php
include "koneksi.php";
$query="SELECT * FROM tb_regist ORDER BY id_regist DESC";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "<br>Data : ".$jum."<br><br>";

while ($data=mysqli_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><span class="d-inline-block text-truncate"><?php echo $data['id_category'];?></span></td>
		<td><span class="d-inline-block text-truncate"><?php echo $data['id_user'];?></span></td>
		<td><img src="../img/payment/<?php echo $data['payment'];?>" width="150px"> </td>
		<td><span class="d-inline-block text-truncate" style="max-width: 200px;"><?php echo $data['tournament_name'];?></span></td>
		<td><?php echo $data['team_name'];?></td>
		<td><a href="?page=detail_registration&id_registration=<?php echo $data['id_regist'];?>">Detail</a></td>
		<td><a href="?page=update_registration&id_registration=<?php echo $data['id_regist'];?>">Payment</a></td>
		<td><a href="?page=delete_registration&id_registration=<?php echo $data['id_regist'];?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php
}
?>
</tbody>
</table>
</div>