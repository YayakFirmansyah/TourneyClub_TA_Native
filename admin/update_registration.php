<?php

include "koneksi.php";
$id=$_GET['id_registration'];
$query_regist="SELECT * FROM tb_regist WHERE id_regist='$id'";
$hasil_regist=mysqli_query($koneksi,$query_regist);
$data_regist=mysqli_fetch_array($hasil_regist);

$query_category="SELECT * FROM tb_category";
$hasil_category=mysqli_query($koneksi,$query_category);

?>

<div class="container">
		<h2 class="bg-gray-800 text-center text-white mt-5">EDIT REGISTRATION</h2>
	
	<form method="POST" action="">
		<div class="row">
			<div class="col-md-12"><h5>TOURNAMENT</h5></div>
			<div class="col-md-6">
				Games Category
				<select name="category" class="form-control">
				<?php while ($data_category=mysqli_fetch_array($hasil_category)) { ?>
					<option value="<?= $data_category['id_category'] ?>"><?= $data_category['name_category'] ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="col-md-6">
				Tournament Name
				<input class="form-control" type="text" name="tournament_name" value="<?php echo $data_regist['tournament_name'];?>">
			</div>
			<div class="col-md-12"><br><h5>TEAM INFO</h5></div>
			<div class="col-md-6">
				Team Name
				<input class="form-control" type="text" name="team_name" value="<?php echo $data_regist['team_name'];?>">
			</div>
			<div class="col-md-6">
				Team E-mail
				<input class="form-control" type="email" name="email" value="<?php echo $data_regist['email'];?>">
			</div>
			<div class="col-md-12"><br><h5>CAPTAIN INFO</h5></div>
			<div class="col-md-4">
				Captain Name
				<input class="form-control" type="text" name="captain_name" value="<?php echo $data_regist['captain_name'];?>">
			</div>
			<div class="col-md-4">
				In-Game Nickname 
				<input class="form-control" type="text" name="captain_nick" value="<?php echo $data_regist['captain_nick'];?>">
			</div>
			<div class="col-md-4">
				Phone Number ( Whatsapp )
				<input class="form-control" type="text" name="phone_number" value="<?php echo $data_regist['phone_number'];?>">
			</div>
			<div class="col-md-12"><br><h5>MEMBER INFO</h5></div>
			<div class="col-lg-6">
				Member 1 Name
				<input class="form-control" type="text" name="member1" value="<?php echo $data_regist['member1'];?>">
				Member 2 Name
				<input class="form-control" type="text" name="member2" value="<?php echo $data_regist['member2'];?>">
				Member 3 Name
				<input class="form-control" type="text" name="member3" value="<?php echo $data_regist['member3'];?>">
				Member 4 Name
				<input class="form-control" type="text" name="member4" value="<?php echo $data_regist['member4'];?>">
				Member 5 Name
				<input class="form-control" type="text" name="member5" value="<?php echo $data_regist['member5'];?>">			
			</div>
			<div class="col-lg-6">
				In-Game Nickname
				<input class="form-control" type="text" name="nick1" value="<?php echo $data_regist['nick1'];?>">
				In-Game Nickname
				<input class="form-control" type="text" name="nick2" value="<?php echo $data_regist['nick2'];?>">
				In-Game Nickname
				<input class="form-control" type="text" name="nick3" value="<?php echo $data_regist['nick3'];?>">
				In-Game Nickname
				<input class="form-control" type="text" name="nick4" value="<?php echo $data_regist['nick4'];?>">
				In-Game Nickname
				<input class="form-control" type="text" name="nick5" value="<?php echo $data_regist['nick5'];?>">				
			</div>
			<div class="col-md-12"><br>
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  			<button type="reset" name="reset" value="reset" class="btn btn-danger">Reset</button>
  			</div>

  		<input type="hidden" name="id_regist" value="<?php echo $data['id_regist'];?>">
	</form><br>
	<?php
			include "koneksi.php";			
			@$category			= $_POST['category'];
			@$tournament_name 	= $_POST['tournament_name'];
			@$team_name 		= $_POST['team_name'];
			@$email 			= $_POST['email'];
			@$captain_name		= $_POST['captain_name'];
			@$captain_nick 		= $_POST['captain_nick'];
			@$phone_number 		= $_POST['phone_number'];
			@$member1 			= $_POST['member1'];
			@$member2 			= $_POST['member2'];
			@$member3 			= $_POST['member3'];
			@$member4 			= $_POST['member4'];
			@$member5 			= $_POST['member5'];
			@$nick1 			= $_POST['nick1'];
			@$nick2 			= $_POST['nick2'];
			@$nick3 			= $_POST['nick3'];
			@$nick4 			= $_POST['nick4'];
			@$nick5 			= $_POST['nick5'];
			@$submit			= $_POST['submit'];
			
			
			
			if ($submit) 
			{
				 
				$query 	= "UPDATE `tb_regist` SET id_category='$category', tournament_name='$tournament_name', team_name='$team_name', email='$email', captain_name='$captain_name', captain_nick='$captain_nick', phone_number='$phone_number', member1='$member1', member2='$member2',member3='$member3',member4='$member4',member5='$member5', nick1='$nick1', nick2='$nick2', nick3='$nick3', nick4='$nick4', nick5='$nick5', WHERE id_regist='$id'";
					$hasil=mysqli_query($koneksi,$query);
					?><script language="javascript">history.go(-2)</script><?php
				}
			
	?>
	</div>