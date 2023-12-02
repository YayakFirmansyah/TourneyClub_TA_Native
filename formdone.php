<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_tournament 	= "SELECT * FROM tb_tournament WHERE id_tournament='$id'";
	$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);

	$query_category="SELECT * FROM tb_category";
	$hasil_category=mysqli_query($koneksi,$query_category);

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
						<div class="col-md-12">
							<h4 class="text-center">Registration Success</h4><br>
							<h5 class="text-center"><a href="?page=notification&id_user=<?php echo $data_user['id_user'];?>">Go to profile</a> to pay and see your registration detail.</h5><br>
							<br>
							<h4 class="text-center">Good Luck</h4>
						</div>
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