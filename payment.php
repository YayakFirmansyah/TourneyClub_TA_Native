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
					<h2 class="profile1">Payment</h2>
					<table class="table profile-table" cellpadding="10px;">
							<thead class="thead-light">
								Choose your payment method.<br><br>
								<form method="post">
									<table class="text-center" style="margin-left: 150px">
										<tr>
											<td><img style="max-width: 200px" src="img/payment/alfamart.png"></td>
										</tr>
										<tr>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="metode" id="gridRadios1" value="alfamart" checked>
          											<label class="form-check-label" for="gridRadios1"></label>
          										</div>
          									</td>
										</tr>
									</table>
									<br><br><button type="submit" name="kirim" value="checkout" class="btn btn-primary">Checkout</button>
									<a href="?page=notification&id_user=<?php echo $data_user['id_user'];?>" class="btn btn-dark text-white">Back</a>       							
								</form>
							</thead>						
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->
	<?php
		$kirim = $_POST['kirim']; 
		if ($kirim) {
			$user = $_SESSION['email'];
			$kode = uniqid(); 
			$kodeAsli = substr($kode, 5);
			$ambil=$koneksi->query("SELECT * FROM tb_regist where email = '$user'");
			$pecah=$ambil->fetch_assoc();
			$idregist=$pecah['id_regist'];
			$insert=$koneksi->query("INSERT INTO tb_payment VALUES ('','$idregist','$user','$kodeAsli')");
	?>		
		<script type="text/javascript">document.location.href="?page=verification&id_user=<?php echo $data_user['id_user']?>"</script>
	<?php	}
		else{
			echo "gagal";
		}
	?>