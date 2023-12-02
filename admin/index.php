<?php 
  session_start();
  if (!isset($_SESSION['username']) and !isset($_SESSION['level'])) {
  echo "YOU ARE NOT LOGGED IN!";
  exit;
}
elseif ($_SESSION['level'] != 'admin') {
  echo "YOU ARE NOT RIGHT TO ACCESS!";
  exit;
}
  include "koneksi.php";
  @$session = $_SESSION['email'];
  $query_user = "SELECT * FROM tb_user WHERE email='$session'";
  $hasil_user = mysqli_query($koneksi, $query_user);
  $data_user = mysqli_fetch_array($hasil_user);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TC Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-trophy"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TC Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="?page=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

      <!-- Nav Item - User -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_user">
          <i class="fas fa-fw fa-user"></i>
          <span>Manage User</span></a>
      </li>

      <!-- Nav Item - Manage Content -->
      <li class="nav-item">
        <a class="nav-link" href="?page=category">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Category</span></a>
      </li>

      <!-- Nav Item - Tournament -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_tournament">
          <i class="fas fa-fw fa-trophy"></i>
          <span>Manage Tournament</span></a>
      </li>

      <!-- Nav Item - News -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_news">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Manage News</span></a>
      </li>

      <!-- Nav Item - Manage Registration -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_registration">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Manage Registration</span></a>
      </li>

      <!-- Nav Item - Manage Comment -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_comment">
          <i class="fas fa-fw fa-comment"></i>
          <span>Manage Comment</span></a>
      </li>

      <!-- Nav Item - Manage Payment -->
      <li class="nav-item">
        <a class="nav-link" href="?page=manage_payment">
          <i class="fas fa-fw fa-money-bill-wave-alt"></i>
          <span>Manage Payment</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Logo -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <img src="../img/logo-admin.png">
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-warning" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $data_user['username'] ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div>

    <?php
    //pemanggilan halaman dengan switch...case...
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'dashboard':
          include "dashboard.php";
          break;
        case 'manage_user':
          include "manage_user.php";
          break;
        case 'manage_tournament':
          include "manage_tournament.php";
          break;
        case 'category':
          include "category.php";
          break;
        case 'detail_user':
          include "detail_user.php";
          break;
        case 'delete_user':
          include "delete_user.php";
          break;
        case 'detail_tournament':
          include "detail_tournament.php";
          break;
        case 'update_tournament':
          include "update_tournament.php";
          break;
        case 'insert_tournament':
          include "insert_tournament.php";
          break;
        case 'delete_tournament':
          include "delete_tournament.php";
          break;
        case 'manage_news':
          include "manage_news.php";
          break;
        case 'insert_news':
          include "insert_news.php";
          break;
        case 'detail_news':
          include "detail_news.php";
          break;
        case 'update_news':
          include "update_news.php";
          break;
        case 'delete_news':
          include "delete_news.php";
          break;
        case 'manage_registration':
          include "manage_registration.php";
          break;
        case 'detail_registration':
          include "detail_registration.php";
          break;
        case 'delete_registration':
          include "delete_registration.php";
          break;
        case 'manage_comment':
          include "manage_comment.php";
          break;
        case 'detail_comment':
          include "detail_comment.php";
          break;
        case 'delete_comment':
          include "delete_comment.php";
          break;
        case 'manage_payment':
          include "manage_payment.php";
          break;
        default:
          echo "<center><h3>No Data!</h3></center>";
          break;
      }
    }
    else {
      include "dashboard.php";
    }
    ?>
  </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tourney Club 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-warning" href="../login/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
