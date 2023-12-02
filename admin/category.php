	<!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Category</h1>
              <div>
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
			<tr style="text-align: center;">
				<th>Id Category</th>
				<th>Category</th>
			</tr>
			</thead>
			<tbody>
	<?php
include "koneksi.php";
$query="SELECT * FROM tb_category";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "<br>Data : ".$jum."<br><br>";

while ($data=mysqli_fetch_array($hasil)) {
?>
	<tr style="text-align: center;">
		<td><?php echo $data['id_category'];?></td>
		<td><?php echo $data['name_category'];?></td>
	</tr>
	<?php
}
?>
</tbody>
</table>
</div>