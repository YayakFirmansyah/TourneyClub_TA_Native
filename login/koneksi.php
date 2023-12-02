<?php

$host= "localhost";
$user= "root";
$pass= "";
$db= "db_TA";

$koneksi= mysqli_connect($host,$user,$pass);
$db_koneksi= mysqli_select_db($koneksi,$db);

if ($koneksi) 
	{
		//echo "KONEKSI BERHASIL";	
	}
else
	{
		echo "CONNECTION FAIL!";
	}
?>
