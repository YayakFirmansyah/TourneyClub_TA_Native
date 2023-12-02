<?php
//proses logout
//mengaktifkan session php
session_start();
//menghapus semua session
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
//mengalihkan halaman ke halaman login
header('location: login.php');