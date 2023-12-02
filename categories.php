<?php 
	include "koneksi.php";
	$query_news = "SELECT * FROM tb_news ORDER BY id_news DESC";
	$hasil_news = mysqli_query($koneksi, $query_news);

	$query_latest	 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
	$query_newslatest 	= "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,4";
	$hasil_newslatest	= mysqli_query($koneksi, $query_newslatest);
	$hasil_latest 		= mysqli_query($koneksi, $query_latest);
	
?>
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>News</h2>
						<p><h5>Some news about games.</h5></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<?php 
							while ($data_news = mysqli_fetch_array($hasil_news)) { ?>
								<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/news/<?= $data_news['image'] ?>">
								</div>
								<div class="rgi-content">
									<h5><a class="text-dark" href="?page=newspage&id=<?= $data_news['id_news'] ?>"><?= $data_news['title'] ?></a></h5>
									<p><?= $data_news['subtitle'] ?></p>
								</div>
							</div>	
						</div>
						<?php }
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
							<?php while ($data_newslatest = mysqli_fetch_array($hasil_newslatest)) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/news/<?= $data_newslatest['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date"><a href="?page=news&id=<?= $data_newslatest['id_news'] ?>"><?= $data_newslatest['title'] ?></a></div>
									<p><?= $data_newslatest['subtitle'] ?></p>
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