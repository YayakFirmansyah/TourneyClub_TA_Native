<?php 
	include "koneksi.php";
	@$session = $_SESSION['email'];
	$query_user="SELECT * FROM tb_user WHERE email='$session'";
	$hasil_user = mysqli_query($koneksi, $query_user);
	$data_user = mysqli_fetch_array($hasil_user);
?>	
	<!-- Page section -->
	<section class="page-section review-page spad set-bg" data-setbg="img/profile-bg.jpg" id="user">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="img/profile/<?= $data_user['image'] ?>" class="img-user">
					<h2 class="user"><?= $data_user['username'] ?></h2>
					<a href="login/logout.php" class="site-btn signout">Sign Out</a>
					<hr width="80%">
					<a href="?page=profile&id_user=<?php echo $data_user['id_user'];?>" class="site-btn profile">My Profile</a>
					<a href="?page=account_setting&id_user=<?php echo $data_user['id_user'];?>" class="site-btn settings">Account Settings</a>
					<a href="?page=notification&id_user=<?php echo $data_user['id_user'];?>" class="site-btn notif">Notifications</a>
				</div>
				<div class="col-md-8" style="background-color: white; border-radius: 10px">
					<h2 class="profile1">Account Settings</h2>
					You can edit your profile.<br><br>
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
  						<label>Email</label>
  						<input type="email" name="email" class="form-control" placeholder="email" value="<?= $data_user['email'] ?>" readonly="readonly">
  					</div>
					<div class="form-group">
  						<label>Username</label>
  						<input type="text" name="username" class="form-control" placeholder="username" value="<?= $data_user['username'] ?>">
  					</div>
  					<div class="form-group">
  						<label>Date of Birth</label>
  						<input type="date" name="date_birth" class="form-control" value="<?= $data_user['date_birth'] ?>">
  					</div>
  					<div class="form-group">
						<label>About me</label>
						<textarea class="form-control" rows="5" name="about" placeholder="About me"><?= $data_user['about'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Image Profile</label><br>
						<input type="file" name="image">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="site-btn btn-sm" value="Save Settings">
					</div>
					<div class="form-group">
						<input type="hidden" name="id_user" value="<?php echo $data_user['id_user'];?>">
					</div>
				</form>
				<?php
				include "koneksi.php";			
				@$username 		= $_POST['username'];
				@$email 		= $_SESSION['email'];
				@$date_birth 	= $_POST['date_birth'];
				@$about 		= $_POST['about'];
				@$image 		= $_FILES['image']['name'];
				@$path 			= $_FILES['image']['tmp_name'];
				@$submit		= $_POST['submit'];
				move_uploaded_file($path, 'C:/xampp/htdocs/TA/img/profile/'.$image);

				if ($submit) 
				{
					$query 	= "UPDATE `tb_user` SET `username`='$username',`about`='$about',`date_birth`='$date_birth',`image`='$image' WHERE email='$session'";
					$hasil=mysqli_query($koneksi,$query);
					?><script language="javascript">document.location.href="?page=profile"</script><?php
				}
				?>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->