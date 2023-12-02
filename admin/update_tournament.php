<?php

include "koneksi.php";
$id=$_GET['id_tournament'];
$query_tournament="SELECT * FROM tb_tournament WHERE id_tournament='$id'";
$hasil_tournament=mysqli_query($koneksi,$query_tournament);
$data_tournament=mysqli_fetch_array($hasil_tournament);

$query_category="SELECT * FROM tb_category";
$hasil_category=mysqli_query($koneksi,$query_category);

?>

<div class="container">
		<h2 class="bg-gray-800 text-center text-white mt-5">EDIT TOURNAMENT</h2>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $data_tournament['title'];?>">
		</div>
		<div class="form-group">
			<label>Subtitle</label>
			<input type="text" name="subtitle" class="form-control" value="<?php echo $data_tournament['subtitle'];?>">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea class="form-control" rows="5" name="body"><?php echo $data_tournament['body'];?></textarea>
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

  		<input type="hidden" name="id_tournament" value="<?php echo $data['id_tournament'];?>">
	</form><br>
	<?php
			include "koneksi.php";			
			@$title 		= $_POST['title'];
			@$subtitle 		= $_POST['subtitle'];
			@$body 			= $_POST['body'];
			@$date_upload	= $_POST['date_upload'];
			@$category 		= $_POST['category'];
			@$image 		= $_FILES['image']['name'];
			@$path 			= $_FILES['image']['tmp_name'];
			@$submit		= $_POST['submit'];
			move_uploaded_file($path, 'C:/xampp/htdocs/TA/img/games/'.$image);
			
			
			
			if ($submit) 
			{
				$query 	= "UPDATE `tb_tournament` SET `title`='$title',`subtitle`='$subtitle',`body`='$body',`id_category`='$category',`image`='$image' WHERE id_tournament='$id' ";
					$hasil=mysqli_query($koneksi,$query);
					?><script language="javascript">history.go(-2)</script><?php
				}
			
	?>
	</div>