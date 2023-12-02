<?php
	
	include "koneksi.php";
	$query_category="SELECT * FROM tb_category";
	$hasil_category=mysqli_query($koneksi,$query_category);
	
?>

<div class="container">
		<h2 class="bg-gray-800 text-center text-white mt-5">INSERT TOURNAMENT</h2>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label>Subtitle</label>
			<input type="text" name="subtitle" class="form-control">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea class="form-control" rows="5" name="body"></textarea>
		</div>
		<div class="form-group">
			<label>Date Expired</label>
			<input type="text" name="date_expired" class="form-control">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select name="category" class="form-control">
				<?php while ($data_category=mysqli_fetch_array($hasil_category)) { ?>
				<option value="<?= $data_category['id_category'] ?>"><?= $data_category['name_category'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Image</label><br>
			<input type="file" name="image">
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  		<button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>

	</form><br>
  			<?php
			include "koneksi.php";			
			@$title 		= $_POST['title'];
			@$subtitle 		= $_POST['subtitle'];
			@$body 			= $_POST['body'];
			@$date_upload	= $_POST['date_upload'];
			@$date_expired	= $_POST['date_expired'];
			@$category 		= $_POST['category'];
			@$image 		= $_FILES['image']['name'];
			@$path 			= $_FILES['image']['tmp_name'];
			@$submit		= $_POST['submit'];
			move_uploaded_file($path, 'C:/xampp/htdocs/TA/img/games/'.$image);
			
			
			if ($submit) 
			{
				$query 	= "INSERT INTO `tb_tournament` (`title`, `subtitle`, `body`, `date_upload`,`date_expired`, `id_category`, `image`) VALUES ('$title', '$subtitle', '$body', current_timestamp(),'$date_expired', '$category', '$image')";
					$hasil=mysqli_query($koneksi,$query);
					?><script language="javascript">history.go(-2)</script><?php
				}
			
	?>
  			</div>