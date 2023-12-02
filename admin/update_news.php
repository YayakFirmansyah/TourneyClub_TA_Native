<?php

include "koneksi.php";
$id=$_GET['id_news'];
$query_news="SELECT * FROM tb_news WHERE id_news='$id'";
$hasil_news=mysqli_query($koneksi,$query_news);
$data_news=mysqli_fetch_array($hasil_news);

?>

<div class="container">
		<h2 class="bg-gray-800 text-center text-white mt-5">EDIT NEWS</h2>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $data_news['title'];?>">
		</div>
		<div class="form-group">
			<label>Subtitle</label>
			<input type="text" name="subtitle" class="form-control" value="<?php echo $data_news['subtitle'];?>">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea class="form-control" rows="5" name="body"><?php echo $data_news['body'];?></textarea>
		</div>
		<div class="form-group">
			<label>Image</label><br>
			<input type="file" name="image">
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  		<button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>

  		<input type="hidden" name="id_news" value="<?php echo $data_news['id_news'];?>">
	</form><br>
	<?php
			include "koneksi.php";			
			@$title 		= $_POST['title'];
			@$subtitle 		= $_POST['subtitle'];
			@$body 			= $_POST['body'];
			@$date_upload	= $_POST['date_upload'];
			@$image 		= $_FILES['image']['name'];
			@$path 			= $_FILES['image']['tmp_name'];
			@$submit		= $_POST['submit'];
			move_uploaded_file($path, 'C:/xampp/htdocs/TA/img/news/'.$image);
			
			
			
			if ($submit) 
			{
				$query 	= "UPDATE `tb_news` SET `title`='$title',`subtitle`='$subtitle',`body`='$body',`image`='$image' WHERE id_news='$id' ";
					$hasil=mysqli_query($koneksi,$query);
					?><script language="javascript">history.go(-2)</script><?php
				}
			
	?>
	</div>