<div class="container">
		<h2 class="bg-gray-800 text-center text-white mt-5">INSERT NEWS</h2>
	
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
			<label>Image</label><br>
			<input type="file" name="image">
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  		<button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>

  		<input type="hidden" name="id_tournament" value="<?php echo $data['id_news'];?>">
	</form><br>
	<form>
  			<?php
			include "koneksi.php";			
			@$title 		= $_POST['title'];
			@$subtitle 		= $_POST['subtitle'];
			@$body 			= $_POST['body'];
			@$date_upload	= $_POST['date_upload'];
			@$image 		= $_FILES['image']['name'];
			@$path 			= $_FILES['image']['tmp_name'];
			@$submit		= $_POST['submit'];
			move_uploaded_file($path, 'img/news/'.$image);
			
			$query 	= "INSERT INTO `tb_news` (`title`, `subtitle`, `body`, `date_upload`, `image`) VALUES ('$title', '$subtitle', '$body', current_timestamp(), '$image')";

			
			
			if ($submit) 
			{
				$hasil=mysqli_query($koneksi,$query);
				
					?><script language="javascript">document.location.href="?page=manage_news"</script><?php
				}
			
	?>
  		</form>
  			</div>