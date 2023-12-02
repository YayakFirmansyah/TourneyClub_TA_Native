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
					<h2 class="profile1">Verification</h2>
					<table class="table profile-table" cellpadding="10px;">
							<thead class="thead-light">
								Copy the code at the nearest Alfamart store<br><br>
								<table class="text-center" style="margin-left: 100px">
										<tr>
											<td>
												<div>
													<img style="max-width: 400px;" src="img/payment/alfamart.png">
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="text-left">
													PAYMENT CODE
												</div>
											</td>
										</tr>
										<tr>
											<td><hr></td>
										</tr>
										<tr>
											<td>
											<div class="text-center" style="font-size: 50px;">
												<?php 
													$kode = uniqid(); 
													$kodeAsli = substr($kode, 5);
													echo $kodeAsli;
												?>
											</div>
										</td>
										</tr>
										<tr>
											<td><hr></td>
										</tr>
										<tr>
											<td class="text-left">
												<h5>How to pay via Alfamart</h5>
													<p style="color: black;">
														1. Note your payment code.<br>
														2. Direct payment to Alfamart outlets.<br>
														3. Include your unique payment code when paying at the cashier<br>
														4. The cashier will enter the code and ask you to pay a nominal amount for your shopping<br>
														5. Transaction is complete and save your proof of payment.

													</p>
											</td>
										</tr>
									</table>        			
							</thead>						
					</table>
					<br>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->