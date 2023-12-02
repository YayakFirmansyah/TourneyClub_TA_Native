<?php 
  include "koneksi.php";
  $query_user = "SELECT * FROM tb_user";
  $hasil_user = mysqli_query($koneksi, $query_user);
  $total_user = mysqli_num_rows($hasil_user);

  $query_category = "SELECT * FROM tb_category";
  $hasil_category = mysqli_query($koneksi, $query_category);
  $total_category = mysqli_num_rows($hasil_category);

  $query_tournament = "SELECT * FROM tb_tournament";
  $hasil_tournament = mysqli_query($koneksi, $query_tournament);
  $total_tournament = mysqli_num_rows($hasil_tournament);

  $query_news = "SELECT * FROM tb_news";
  $hasil_news = mysqli_query($koneksi, $query_news);
  $total_news = mysqli_num_rows($hasil_news);

  $query_regist = "SELECT * FROM tb_regist";
  $hasil_regist = mysqli_query($koneksi, $query_regist);
  $total_regist = mysqli_num_rows($hasil_regist);

  $query_comment = "SELECT * FROM tb_comment";
  $hasil_comment = mysqli_query($koneksi, $query_comment);
  $total_comment = mysqli_num_rows($hasil_comment);

  $query_payment = "SELECT * FROM tb_payment";
  $hasil_payment = mysqli_query($koneksi, $query_payment);
  $total_payment = mysqli_num_rows($hasil_payment);
?>
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_user ?> Account</div>
                    </div>
                    <a href="?page=manage_user" class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Category</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_category ?> Category</div>
                    </div>
                    <a href="?page=category" class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Manage Tournament</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_tournament ?> Tournament</div>
                    </div>
                    <a href="?page=manage_tournament" class="col-auto">
                      <i class="fas fa-trophy fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Manage News</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_news ?> News</div>
                    </div>
                    <a href="?page=manage_news" class="col-auto">
                      <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> 

<div class="row">

          <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Manage Registration</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_regist ?> Register</div>
                    </div>
                    <a href="?page=manage_registration" class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Manage Comment</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_comment ?> Comment</div>
                    </div>
                    <a href="?page=manage_comment" class="col-auto">
                      <i class="fas fa-comment fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>


          <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Manage Payment</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_payment ?> Payment</div>
                    </div>
                    <a href="?page=manage_registration" class="col-auto">
                      <i class="fas fa-money-bill-wave-alt fa-2x text-gray-300"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>