<?php 
	include "koneksi.php";
	if (isset($_GET['id_category'])) {
		$id=$_GET['id_category'];
		$query_category="SELECT * FROM tb_category WHERE id_category='$id'";
		$hasil_category=mysqli_query($koneksi,$query_category);
		$data_category = mysqli_fetch_array($hasil_category);

		$query_tournament	= "SELECT * FROM tb_tournament WHERE id_category='$id' ORDER BY id_tournament DESC";
		$query_latest	 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
		$query_news 		= "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,4";
		$hasil_news 		= mysqli_query($koneksi, $query_news);
		$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);
		$hasil_latest	 	= mysqli_query($koneksi, $query_latest);


	}
	
	
?>
	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<?php			
							while ($data_tournament = mysqli_fetch_array($hasil_tournament)) {
							$mulai = $data_tournament['date_upload']; // waktu mulai
							$exp = $data_tournament['date_expired']; // batas waktu
							if (!(strtotime($mulai) <= time() AND time() >= strtotime($exp))) { ?>
								<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/games/<?= $data_tournament['image'] ?>">
								</div>
								<div class="rgi-content">
									<h5><a class="text-dark" href="?page=content&id=<?= $data_tournament['id_tournament'] ?>"><?= $data_tournament['title'] ?></a></h5>
									<p><?= $data_tournament['subtitle'] ?></p>
								</div>
							</div>	
						</div>	
						<?php	} else {
								
							}
												
						 }
						?>
						
					</div>
					<div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03.</a>
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
							<?php while ($data_latest = mysqli_fetch_array($hasil_latest)) { 
								$mulai = $data_latest['date_upload']; // waktu mulai
								$exp = $data_latest['date_expired']; // batas waktu
								if (!(strtotime($mulai) <= time() AND time() >= strtotime($exp))) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/games/<?= $data_latest['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date"><a href="?page=content&id=<?= $data_latest['id_tournament'] ?>"><?= $data_latest['title'] ?></a></div>
									<p><?= $data_latest['subtitle'] ?></p>
									<a class="lb-author">By Admin</a>
								</div>
							</div>
						<?php } else {
								}
							} ?>	
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