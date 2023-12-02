<?php
session_start();
include "koneksi.php";
@$session = $_SESSION['email'];
$query_user = "SELECT * FROM tb_user WHERE email='$session'";
$hasil_user = mysqli_query($koneksi, $query_user);
$data_user = mysqli_fetch_array($hasil_user);

$query_tournament 	= "SELECT * FROM tb_tournament ORDER BY id_tournament DESC LIMIT 0,4";
$hasil_tournament 	= mysqli_query($koneksi, $query_tournament);

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
	<link href="img/favicon.png" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="user/index.php">
				<img src="img/logo.png" alt="">
			</a>
			<?php
			if (isset($_SESSION['email'])) { ?>
				<div class="user-panel">
					<a href="?page=profile&id_user=<?php echo $data_user['id_user']; ?>"><img src="img/profile/<?= $data_user['image'] ?>" class='img-user-index'></a>
					<font color="white">| <?= $data_user['username'];  ?></font>
				</div>
			<?php } else { ?>
				<div class="user-panel">
					<a href="login/login.php">Login</a>
				</div>
			<?php } ?>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="?page=home">Home</a></li>
					<li><a href="?page=tournament">Tournament</a></li>
					<li><a href="?page=news">News</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest Tournament</div>
		<div class="news-ticker">

			<div class="news-ticker-contant">
				<?php while ($data_tournament = mysqli_fetch_array($hasil_tournament)) { ?>
					<div class="nt-item"><span class="new">New</span><?= $data_tournament['title'] ?></div>
				<?php
				}
				?>
			</div>

		</div>
	</div>
	<!-- Latest news section end -->



	<div>
		<?php
		//pemanggilan halaman dengan switch...case...
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'home':
					include "home.php";
					break;
				case 'tournament':
					include "review.php";
					break;
				case 'news':
					include "categories.php";
					break;
				case 'games':
					include 'games.php';
					break;
				case 'profile':
					include 'profile.php';
					break;
				case 'account_setting':
					include 'account-setting.php';
					break;
				case 'notification':
					include 'notification.php';
					break;
				case 'content':
					include 'content.php';
					break;
				case 'form':
					include 'form.php';
					break;
				case 'formdone':
					include 'formdone.php';
					break;
				case 'newspage':
					include 'newspage.php';
					break;
				case 'detail':
					include 'detail.php';
					break;
				case 'payment':
					include 'payment.php';
					break;
				case 'delete':
					include 'delete.php';
					break;
				case 'verification':
					include 'verification.php';
					break;
				default:
					echo "<center><h3>No Data!</h3></center>";
					break;
			}
		} else {
			include "home.php";
		}
		?>
	</div>



	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
					</div>
				</div>
				<div class="col-lg-6 col-md-4">
					<div class="footer-widget mb-5 mb-md-0 text-white">
						<img src="img/footer-logo.png" alt=""><br><br>
						<div class="latest-blog">
							<br>
							<h4 class="fw-title">Contact us</h4>
							<p style="color: white;">If any question and publish your tournament just contact us.</p>
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook fa-2x" style="color: #3b5998;"></i></a>
								<a href="#"><i class="fa fa-twitter fa-2x" style="color: #00acee"></i></a>
								<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
								<a href="#"><i class="fa fa-whatsapp fa-2x" style="color: #33CC66"></i></a>
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
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved
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