<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	@$session = $_SESSION['email'];
	$query_tournament 	= "SELECT * FROM tb_tournament WHERE id_tournament='$id'";
	$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);

	$query_category="SELECT * FROM tb_category";
	$hasil_category=mysqli_query($koneksi,$query_category);

	$query_user="SELECT * FROM tb_user WHERE email='$session'";
	$hasil_user=mysqli_query($koneksi,$query_user);

	$query_latest	 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
	$query_news 		= "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,4";
	$hasil_news 		= mysqli_query($koneksi, $query_news);
	$hasil_latest 		= mysqli_query($koneksi, $query_latest);
?>
<!-- Page section -->
	<section class="page-section single-blog-page spad" style="background-color: #c2e8ce">
		<div class="container">
			<div class="row"> 
				<?php while ($data_tournament = mysqli_fetch_array($hasil_tournament)) { ?>
				<div class="col-lg-8">
					<div class="blog-thumb set-bg" data-setbg="img/games/<?= $data_tournament['image'] ?>">
						<div class="rgi-extra">
							<div class="rgi-star"><img src="../../img/icons/star.png" alt=""></div>
							<div class="rgi-heart"><img src="../../img/icons/heart.png" alt=""></div>
						</div>
					</div>
					<div class="blog-content">
						<h4><?= $data_tournament['title'] ?></h4>
					</div>
					<div class="comment-form-warp">
						<form class="comment-form" method="POST" action="">
							<h4 class="text-center">REGISTRATION FORM</h4><br>
							<div class="row">
								<div class="col-md-12"><h5>TOURNAMENT</h5><br></div>
								<div class="col-md-6">
									Games Category
										<select name="category" class="form-control">
										<?php while ($data_category=mysqli_fetch_array($hasil_category)) { ?>
											<option value="<?= $data_category['id_category'] ?>"><?= $data_category['name_category'] ?></option>
										<?php } ?>
										</select>
								</div>
								<div class="col-md-6">
									Tournament Name
									<input type="text" name="tournament_name" placeholder="Ex : Turnamen Dota 2 - Seventh Heaven">
								</div>
								<div class="col-md-12"><h5>TEAM INFO</h5><br></div>
								<div class="col-md-6">
									Team Name
									<input type="text" name="team_name" placeholder="Ex : Wind Of Squad">
								</div>
								<div class="col-md-6">
									Team E-mail
									<input type="email" name="email" placeholder="Ex : yourteam@gmail.com">
								</div>
								<div class="col-md-12"><h5>CAPTAIN INFO</h5><br></div>
								<div class="col-md-4">
									Captain Name
									<input type="text" name="captain_name" placeholder="Ex : Budi">
								</div>
								<div class="col-md-4">
									In-Game Nickname 
									<input type="text" name="captain_nick" placeholder="Ex : CaptainBudy">
								</div>
								<div class="col-md-4">
									Phone Number ( Whatsapp )
									<input type="text" name="phone_number" placeholder="Ex : 081xxxxxxxxx">
								</div>
								<div class="col-md-12"><h5>MEMBER INFO</h5><br></div>
								<div class="col-lg-6">
									Member 1 Name
									<input type="text" name="member1" placeholder="Ex : Yayak">
									Member 2 Name
									<input type="text" name="member2" placeholder="Ex : Yayak">
									Member 3 Name
									<input type="text" name="member3" placeholder="Ex : Yayak">
									Member 4 Name
									<input type="text" name="member4" placeholder="Ex : Yayak">
									Member 5 Name
									<input type="text" name="member5" placeholder="Ex : Yayak">			
								</div>
								<div class="col-lg-6">
									In-Game Nickname
									<input type="text" name="nick1" placeholder="Ex : Xrez">
									In-Game Nickname
									<input type="text" name="nick2" placeholder="Ex : Xrez">
									In-Game Nickname
									<input type="text" name="nick3" placeholder="Ex : Xrez">
									In-Game Nickname
									<input type="text" name="nick4" placeholder="Ex : Xrez">
									In-Game Nickname
									<input type="text" name="nick5" placeholder="Ex : Xrez">				
								</div>
								<div >
									<input type="submit" name="submit" class="site-btn btn-sm" value="Send">
									<?php while ($data_user=mysqli_fetch_array($hasil_user)) { ?>
									<input type="hidden" name="id_user" value="<?php echo $data_user['id_user'];?>">
									<?php } ?>
								</div>
							</div>
						</form>
						<?php 
							include "koneksi.php";
							@$category			= $_POST['category'];
							@$id_user			= $_POST['id_user'];
							@$tournament_name 	= $_POST['tournament_name'];
							@$team_name 		= $_POST['team_name'];
							@$email 			= $_POST['email'];
							@$captain_name		= $_POST['captain_name'];
							@$captain_nick 		= $_POST['captain_nick'];
							@$phone_number 		= $_POST['phone_number'];
							@$member1 			= $_POST['member1'];
							@$member2 			= $_POST['member2'];
							@$member3 			= $_POST['member3'];
							@$member4 			= $_POST['member4'];
							@$member5 			= $_POST['member5'];
							@$nick1 			= $_POST['nick1'];
							@$nick2 			= $_POST['nick2'];
							@$nick3 			= $_POST['nick3'];
							@$nick4 			= $_POST['nick4'];
							@$nick5 			= $_POST['nick5'];
							@$submit			= $_POST['submit'];

							if ($submit) {
								$query = "INSERT INTO tb_regist(`id_category`,`id_user`, `tournament_name`, `team_name`, `email`, `captain_name`, `captain_nick`, `phone_number`, `member1`, `member2`, `member3`, `member4`, `member5`, `nick1`, `nick2`, `nick3`, `nick4`, `nick5`, `date_regist`) VALUES ('$category','$id_user','$tournament_name','$team_name','$email','$captain_name','$captain_nick','$phone_number','$member1','$member2','$member3','$member4','$member5','$nick1','$nick2','$nick3','$nick4','$nick5',current_timestamp())";
								$hasil=mysqli_query($koneksi,$query);
								?><script language="javascript">document.location.href="?page=formdone&id=<?= $data_tournament['id_tournament'] ?>"</script><?php
							}
						?>
					</div>
				</div>
				<?php } ?>
				

				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Latest Tournament</h4>
						<div class="latest-blog">
							<?php while ($data_latest = mysqli_fetch_array($hasil_latest)) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/games/<?= $data_latest['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date"><a href="?page=content&id=<?= $data_latest['id_tournament'] ?>"><?= $data_latest['title'] ?></a></div>
									<p><?= $data_latest['subtitle'] ?></p>
									<a class="lb-author">By Admin</a>
								</div>
							</div>
						<?php } ?>	
						</div>
					</div>
					<div class="widget-item">
						<h4 class="widget-title">Latest News</h4>
						<div class="latest-blog">
							<?php while ($data_news = mysqli_fetch_array($hasil_news)) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/news/<?= $data_news['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date"><a href="?page=news&id=<?= $data_news['id_news'] ?>"><?= $data_news['title'] ?></a></div>
									<p><?= $data_news['subtitle'] ?></p>
									<a class="lb-author">By Admin</a>
								</div>
							</div>
						<?php } ?>	
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->