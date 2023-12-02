<?php 
	include "koneksi.php";
	$query_tournament 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
	$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);

	$query_news = "SELECT * FROM tb_news ORDER BY id_news DESC LIMIT 0,3";
	$hasil_news = mysqli_query($koneksi, $query_news);

 ?>
<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Tournament</span> Out There</h2>
						<p>Easily, Great, and Trusted<br> Tournament Register</p>
						<a href="#bawah" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Tournament</span> Out There</h2>
						<p>Easily, Great, and Trusted<br> Tournament Register</p>
						<a href="#bawah" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Feature section -->
	<section class="feature-section spad set-bg" data-setbg="img/index-bg.jpg" id="bawah">
		<div class="container">
			<div class="section-title">
				<h2>Latest Tournament</h2>
			</div>
			<div class="row">
				<?php while ($data_tournament = mysqli_fetch_array($hasil_tournament)) { ?>
					<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/games/<?= $data_tournament['image'] ?>">
						<span class="cata new">New</span>
						<div class="fi-content text-white">
							<h5><a href="?page=content&id=<?= $data_tournament['id_tournament'] ?>"><?= $data_tournament['title'] ?></a></h5>
							<P class="d-inline-block text-truncate" style="max-width: 250px;"><?= $data_tournament['subtitle'] ?></p>
						</div>
					</div>
				</div>
				<?php } ?>				
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Developer game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
				<h2>Developer Games</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/garena.jpg">
							<div class="cata new">Garena</div>
						</div>
						<div class="rgi-content">
							<h5><a href="https://www.garena.co.id/"><font color="black">Garena</font></a></h5>
							<p>Garena is a digital entertainment platform, developing and publishing online PC and mobile digital content in Southeast Asia and Taiwan. It was founded in Singapore in 2009. </p>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/supercell.png">
							<div class="cata racing">Supercell</div>
						</div>
						<div class="rgi-content">
							<h5><a href="https://supercell.com/en/"><font color="black">Supercell</font></a></h5>
							<p>Supercell is a mobile game development company based in Helsinki, Finland. Founded in May 2010, the company's debut game was the browser game Gunshine.net, and after its release in 2011.</p>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/valve.jpg">
							<div class="cata adventure">Valve</div>
						</div>
						<div class="rgi-content">
							<h5><a href="https://www.valvesoftware.com/en/"><font color="black">Valve</font></a></h5>
							<p>Valve Corporation is an American video game developer, publisher and digital distribution in Bellevue, Washington. It is the developer of the software distribution platform Steam & Half-Life.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Recent game section end -->


	<!-- Developer game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<h2>Latest News</h2>
			</div>
			<div class="row">
				<?php while ($data_news = mysqli_fetch_array($hasil_news)) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/news/<?= $data_news['image'] ?>">
						</div>
						<div class="rgi-content">
							<h5><a href="?page=newspage&id=<?= $data_news['id_news'] ?>" ><font color="black"><?= $data_news['title'] ?></font></a></h5>
							<p class="d-inline-block text-truncate" style="max-width: 300px;"><?= $data_news['subtitle'] ?></p>
						</div>
					</div>	
				</div>
				<?php
				}
				?>
				
			</div>
		</div>
	</section>
	<!-- Recent game section end -->