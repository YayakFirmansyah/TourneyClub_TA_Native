<?php 
	include "koneksi.php";
	@$session = $_SESSION['email'];
	$query_user = "SELECT * FROM tb_user WHERE email='$session'";
	$hasil_user = mysqli_query($koneksi, $query_user);
	$data_user = mysqli_fetch_array($hasil_user);

	$query_regist = "SELECT * FROM tb_regist WHERE email='$session'";
	$hasil_regist = mysqli_query($koneksi, $query_regist);
	$no=1;
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
					<h2 class="profile1">Detail</h2>
					This information about your detail registration.<br><br>
					<table class="table profile-table" cellpadding="10px;">
							<thead class="thead-light">
						<?php while ($data_regist=mysqli_fetch_array($hasil_regist)) { ?>
						<tr>
		<td>Tournament Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['tournament_name']?></td>
	</tr>
	<tr>
		<td>Team Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['team_name']?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['email']?></td>
	</tr>
	<tr>
		<td>Captain Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['captain_name']?></td>
	</tr>
	<tr>
		<td>Captain Nick</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['captain_nick']?></td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data_regist['phone_number']?></td>
	</tr>
</table>
<table class="table table-striped table-bordered">
	<thead class="thead-light">
		<th style="text-align: center;"><h4>Member Name</h4></th>
		<th style="text-align: center;"><h4>Member Nickname</h4></th>
	</tr>
	</thead>
	<tr>
		<td><?php echo $data_regist['member1']?></td>
		<td><?php echo $data_regist['nick1']?></td>
	</tr>
	<tr>
		<td><?php echo $data_regist['member2']?></td>
		<td><?php echo $data_regist['nick2']?></td>
	</tr>
	<tr>
		<td><?php echo $data_regist['member3']?></td>
		<td><?php echo $data_regist['nick3']?></td>
	</tr>
	<tr>
		<td><?php echo $data_regist['member4']?></td>
		<td><?php echo $data_regist['nick4']?></td>
	</tr>
	<tr>
		<td><?php echo $data_regist['member5']?></td>
		<td><?php echo $data_regist['nick5']?></td>
	</tr>
</table>
						<?php } ?>
						</thead>
					</table>
					<a href="?page=notification&id_user=<?php echo $data_user['id_user'];?>" class="btn btn-dark text-white">Back</a><br><br>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->