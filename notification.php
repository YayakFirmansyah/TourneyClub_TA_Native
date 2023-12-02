<?php 
	include "koneksi.php";
	@$session = $_SESSION['email'];
	$query_user = "SELECT * FROM tb_user WHERE email='$session'";
	$hasil_user = mysqli_query($koneksi, $query_user);
	$data_user = mysqli_fetch_array($hasil_user);

	$query_regist = "SELECT * FROM tb_regist WHERE email='$session'";
	$hasil_regist = mysqli_query($koneksi, $query_regist);
	$no=1;

	$query_payment = "SELECT * FROM tb_payment WHERE email='$session'";
	$hasil_payment = mysqli_query($koneksi, $query_payment);
?>
	<!-- Page section -->
	<section class="page-section review-page spad set-bg" data-setbg="img/profile-bg.jpg">
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
					<h2 class="profile1">Notifications</h2>
					This information about your transactions.<br><br>
					<table class="table profile-table" cellpadding="10px;">
							<thead class="thead-light">
						<tr class="text-center">
							<th scope="col">No</th>
							<th scope="col">Id Category</th>
							<th scope="col">Tournament Name</th>
							<th colspan="3">Action</th>
						</tr>
						<?php while ($data_regist=mysqli_fetch_array($hasil_regist)) { ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td><?= $data_regist['id_category'] ?></td>
							<td><?= $data_regist['tournament_name'] ?></td>
							<td><a href="?page=detail&id_user=<?php echo $data_user['id_user'];?>">Detail</a></td>
							<td><a href="?page=payment&id_user=<?php echo $data_user['id_user'];?>">Payment</a></td>
							<td><a href="?page=delete&id_regist=<?php echo $data_regist['id_regist'];?>" onclick="return confirm('Are you sure?')">Delete</a></td>
						</tr>	
						<?php } ?>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->