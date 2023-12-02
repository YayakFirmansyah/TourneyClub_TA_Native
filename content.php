<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	@$session = $_SESSION['email'];
	$query_tournament 	= "SELECT * FROM tb_tournament WHERE id_tournament='$id'";
	$query_comment	 	= "SELECT * FROM tb_comment WHERE id_tournament='$id' ORDER BY id_comment DESC ";
	$query_latest	 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
	$query_news 		= "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,4";
	$hasil_news 		= mysqli_query($koneksi, $query_news);
	$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);
	$hasil_comment		= mysqli_query($koneksi, $query_comment);
	$hasil_latest	 	= mysqli_query($koneksi, $query_latest);
?>
<!-- Page section -->
	<section class="page-section single-blog-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php while ($data_tournament = mysqli_fetch_array($hasil_tournament)) { ?>
						<div class="blog-thumb set-bg" data-setbg="img/games/<?= $data_tournament['image'] ?>">
						<div class="rgi-extra">
							<div class="rgi-star"><img src="../../img/icons/star.png" alt=""></div>
							<div class="rgi-heart"><img src="../../img/icons/heart.png" alt=""></div>
						</div>
					</div>
					<div class="blog-content">
						<h3><?= $data_tournament['title'] ?></h3>
						<p style="color: black;"><?= $data_tournament['subtitle'] ?></p>
							<p style="color: black;"><?= nl2br($data_tournament['body']);  ?></p>
							<?php if (isset($_SESSION['email'])) { ?>
								<br><a href="?page=form&id=<?= $data_tournament['id_tournament'] ?>">Registration in here...</a><br>
							<?php } 
							else { ?>
							<br><a href="login/login.php">Registration in here...</a><br>
							<?php } ?>
					</div>
					<?php } ?>
					<hr>
					<div class="comment-form-warp">
						<h4 class="comment-title">Leave Your Comment</h4>
						<form class="comment-form" method="post" action="proseskomen.php">
							<div class="row">
								<div class="col-lg-12">
									<textarea name="message" placeholder="Message"></textarea>
									<input type="hidden" name="id" value="<?= $id ?>">
									<input type="hidden" name="username" value="<?= $session ?>">
									<?php if (isset($_SESSION['email'])) { ?>
										<button type="submit" name="submit" class="site-btn btn-sm">Send</button>
									<?php } 
									else { ?>
										<a href="login/login.php" class="site-btn btn-sm">Send</a>
									<?php } ?>
									<hr>
								</div>							
							</div>
						</form>
						<?php while ($data_comment = mysqli_fetch_array($hasil_comment)) { 
									$name = $data_comment['email'];
									$query_name = "SELECT * FROM tb_user WHERE email='$name'";
									$hasil_name = mysqli_query($koneksi, $query_name);
									$data_name = mysqli_fetch_array($hasil_name);
								?>
								<div class="col-lg-12">
									<h6><?= $data_name['username'] ?></h6><br>
									<p><?= $data_comment['body'] ?></p>
								</div>
								<?php } ?>
					</div>
				</div>
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
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Latest News</h4>
						<div class="latest-blog">
							<?php while ($data_news = mysqli_fetch_array($hasil_news)) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/news/<?= $data_news['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date" style="max-height: 50px;"><a href="?page=news&id=<?= $data_news['id_news'] ?>"><?= $data_news['title'] ?></a></div>
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