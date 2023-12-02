<?php 
	include "koneksiku.php";
	if (isset($_POST['image'])) {
		$image = $_FILES['file']['name'];
		$path = $_FILES['file']['tmp_name'];

		move_uploaded_file($path, 'img/'.$image);
		mysqli_query($koneksi, "INSERT INTO upload VALUES('', '$image')");
		header('location: upload.php?sukses');

	}

	$hasil = mysqli_query($koneksi, "SELECT * FROM upload");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php if (isset($_GET['sukses'])): ?>
		<p>Gas</p>
	<?php endif; ?>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="image" value="Submit">
	</form>
	<?php while ($data = mysqli_fetch_array($hasil)): ?>
	<img src="img/<?= $data['image'] ?>" width='100px;'><br>		
	<?php endwhile; ?>

</body>
</html>