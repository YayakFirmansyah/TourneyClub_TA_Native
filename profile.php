<?php 
	include "koneksi.php";
	@$session = $_SESSION['email'];
	$query_user = "SELECT * FROM tb_user WHERE email='$session'";
	$hasil_user = mysqli_query($koneksi, $query_user);
	$data_user = mysqli_fetch_array($hasil_user);
?>	
	<!-- Page section -->
	<section class="page-section review-page spad set-bg" data-setbg="img/profile-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="img/profile/<?= $data_user['image'] ?>" class="img-user">
					<h2 class="user"><?= $data_user['username'];  ?></h2>
					<a class="site-btn signout" href="login/logout.php">Logout</a>
					<hr width="80%">
					<a href="?page=profile&id_user=<?php echo $data_user['id_user'];?>" class="site-btn profile">My Profile</a>
					<a href="?page=account_setting&id_user=<?php echo $data_user['id_user'];?>" class="site-btn settings">Account Settings</a>
					<a href="?page=notification&id_user=<?php echo $data_user['id_user'];?>" class="site-btn notif">Notifications</a>
				</div>
				<div class="col-md-8" style="background-color: white; border-radius: 10px">
					<h2 class="profile1">My Profile</h2>
					This information will be displayed publishy on your profile.<br><br>
					<table class="table profile-table" cellpadding="10px">
						<tr>
							<th>Email</th>
							<td> : </td>
							<td><?= $data_user['email']; ?></td>
						</tr>
						<tr>
							<th>Username</th>
							<td> : </td>
							<td><?= $data_user['username'];  ?></td>
						</tr>	
						<tr>
							<th>About me</th>
							<td> : </td>
							<td><?=  $data_user['about']; ?></td>
						</tr>
						<tr>
							<th>Date Birth</th>
							<td> : </td>
							<td><?= $data_user['date_birth'] ?></td>
						</tr>
						<tr>
							<th>Date Created</th>
							<td> : </td>
							<td><?= $data_user['date_created'] ?></td>
						</tr>
						<tr>
							<th>Image Profile</th>
							<td> : </td>
							<td><img src="img/profile/<?= $data_user['image'] ?>" width="150px"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->