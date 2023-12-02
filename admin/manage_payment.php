	<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Manage Payment</h1>
              <div>
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>No</th>
				<th>Id Regist</th>
				<th>Email</th>
				<th>Code</th>
				<th colspan="">Action</th>
			</tr>
			</thead>
			<tbody>
	<?php
include "koneksi.php";
$query="SELECT * FROM tb_payment ORDER BY id_payment DESC";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "<br>Data : ".$jum."<br><br>";

while ($data=mysqli_fetch_array($hasil)) {
?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><span class="d-inline-block text-truncate"><?php echo $data['id_regist'];?></span></td>
		<td><span class="d-inline-block text-truncate"><?php echo $data['email'];?></span></td>
		<td><span class="d-inline-block text-truncate"><?php echo $data['code'];?></span></td>
		<td><a href="?page=delete_comment&id_comment=<?php echo $data['id_comment'];?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php
}
?>
</tbody>
</table>
</div>