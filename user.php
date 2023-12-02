<?php 
session_start();
if (isset($_SESSION['username'])) {
	$jeneng = $_SESSION['username'];
}
global $jeneng;
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Tourney Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="user/index.php">
				<img src="img/logo.png" alt="">
			</a>
			<div class="user-panel">
				 <a href="profile.php"><i class="fa fa-user"></i></a>  <font color="white">| <?= $jeneng;  ?></font>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="user.php">Home</a></li>
					<li><a href="review.php">Tournament</a></li>
					<li><a href="categories.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->



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


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest Tournament</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">New</span>Pubg Mobile Indonesian Championship. </div>
				<div class="nt-item"><span class="strategy">Moba</span>Mobile Legends Indonesian Game Championship 2018. </div>
				<div class="nt-item"><span class="racing">Fps</span>Counter Strike Global Offensive Zowie Asia Extreme Land Indonesian Qualifier 2018. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Feature section -->
	<section class="feature-section spad set-bg" data-setbg="img/index-bg.jpg" id="bawah">
		<div class="container">
			<div class="section-title">
				<h2>Latest Tournament</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/pubgm.jpg">
						<span class="cata new">New</span>
						<div class="fi-content text-white">
							<h5><a href="#">Pubg Mobile</a></h5>
							<P>Pubg Mobile Indonesian Championship. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/ml.jpg">
						<span class="cata strategy">Moba</span>
						<div class="fi-content text-white">
							<h5><a href="#">Mobile Legends</a></h5>
							<p>Mobile Legends Indonesian Game Championship 2018. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/ff.jpg">
						<span class="cata new">New</span>
						<div class="fi-content text-white">
							<h5><a href="#">Free Fire</a></h5>
							<p>Axiata Game Hero </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/csgo.jpg">
						<span class="cata racing">Fps</span>
						<div class="fi-content text-white">
							<h5><a href="game/csgo/1.php">Counter Strike Global Offensive</a></h5>
							<p>Counter Strike Global Offensive Zowie Asia Extreme Land Indonesian Qualifier 2018. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
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
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
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
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
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
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
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
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/latest-blog/a.jpg">
						</div>
						<div class="rgi-content">
							<h5><a href="#"><font color="black">Honkai Impact 3 Adakan Turnamen E-Sport Skala Internasional</font></a></h5>
							<p>Ternyata Game 3D Action RPG yang paling diakui di tahun 2019 yaitu Honkai Impact 3 ikut terjun ke dunia E-Sport dengan Turnamen SEA-PAC Finals pada tanggal 30 Juni 2019 kemarin.</p>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/latest-blog/b.jpg">
						</div>
						<div class="rgi-content">
							<h5><a href="#"><font color="black">Jadwal dan Bagan Pertandingan Group Stage The Chongqing Major</font></a></h5>
							<p>Turnamen Major kedua untuk musim kompetisi Dota Pro Circuit 2018-2019 yaitu The Chongqing Major akan dimulai pada tanggal 19 Januari 2019 di BLOOMAGE Cultural and Sports Center.</p>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/latest-blog/c.jpg">
						</div>
						<div class="rgi-content">
							<h5><a href="https://www.valvesoftware.com/en/"><font color="black">Tim BOOM ID Melakukan "Throw" Terbesar Sepanjang Sejarah Turnamen Dota 2</font></a></h5>
							<p>Berhasil masuk ke dalam turnamen The Bucharest Minor, Tim Dota 2 asal Indonesia yaitu BOOM ID melakukan "Throw" pada game pertama mereka melawan Team Team.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Recent game section end -->



	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
						<h4>The Best Tournament Out There</h4>
						<p>Easily, Great, and Trusted<br> Tournament Register</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Latest Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/a.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Ramadhian Maulana P.</a> <span>on</span>  Kok gak ada stand up bang??</p>
									<div class="tc-date">June 21, 2019</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/b.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Nayaka Raga N.</a> <span>on</span>  Ditunggu gan turnamen Dragon Nest nya wkwkwk</p>
									<div class="tc-date">March 28, 2019</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/c.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Rizky Perdana</a> <span>on</span>  Gan saya mau ikut turnamen Dota 2 nya tapi saya gak ada libur:(</p>
									<div class="tc-date">January 18, 2019</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/d.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Kevin Rizal</a> <span>on</span> Saya ingin ikut turnamen Mobile legends tapi gak punya tim:(</p>
									<div class="tc-date">December 27, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>