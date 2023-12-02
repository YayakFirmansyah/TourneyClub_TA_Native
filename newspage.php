<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	@$session = $_SESSION['email'];
	$query_news 	= "SELECT * FROM tb_news WHERE id_news='$id'";
	$query_commentnews	 	= "SELECT * FROM tb_commentnews WHERE id_news='$id'";
	$query_latest	 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
	$hasil_news 	= mysqli_query($koneksi, $query_news);
	$hasil_commentnews		= mysqli_query($koneksi, $query_commentnews);
	$hasil_latest	 	= mysqli_query($koneksi, $query_latest);

	$query_newslatest 	= "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,4";
	$hasil_newslatest 	= mysqli_query($koneksi, $query_newslatest);
?>
<!-- Page section -->
	<section class="page-section single-blog-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php while ($data_news = mysqli_fetch_array($hasil_news)) { ?>
						<div class="blog-thumb set-bg" data-setbg="img/news/<?= $data_news['image'] ?>">
						<div class="rgi-extra">
							<div class="rgi-star"><img src="../../img/icons/star.png" alt=""></div>
							<div class="rgi-heart"><img src="../../img/icons/heart.png" alt=""></div>
						</div>
					</div>
					<div class="blog-content">
						<h3><?= $data_news['title'] ?></h3>
						<p><?= $data_news['subtitle'] ?></p>
							<p><?= nl2br($data_news['body']); ?></p>
					</div>
					<?php } ?>
					<hr>
					<div class="comment-form-warp">
						<h4 class="comment-title">Leave Your Comment</h4>
						<form class="comment-form" method="post" action="prosesnews.php">
							<div class="row">
								<div class="col-lg-12">
									<textarea name="message" placeholder="Message"></textarea>
									<input type="hidden" name="id" value="<?= $id ?>">
									<input type="hidden" name="username" value="<?= $session ?>">
									<button type="submit" name="submit" class="site-btn btn-sm">Send</button>
									<hr>
								</div>							
							</div>
						</form>
						<?php while ($data_commentnews = mysqli_fetch_array($hasil_commentnews)) { 
									$name = $data_commentnews['email'];
									$query_name = "SELECT * FROM tb_user WHERE email='$name'";
									$hasil_name = mysqli_query($koneksi, $query_name);
									$data_name = mysqli_fetch_array($hasil_name);
								?>
								<div class="col-lg-12">
									<h6><?= $data_name['username'] ?></h6><br>
									<p><?= $data_commentnews['body'] ?></p>
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
							<?php while ($data_newslatest = mysqli_fetch_array($hasil_newslatest)) { ?>
							<div class="lb-item">		
								<div class="lb-thumb set-bg" data-setbg="img/news/<?= $data_newslatest['image'] ?>"></div>
								<div class="lb-content">
									<div class="lb-date" style="max-height: 50px;"><a href="?page=news&id=<?= $data_newslatest['id_news'] ?>"><?= $data_newslatest['title'] ?></a></div>
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