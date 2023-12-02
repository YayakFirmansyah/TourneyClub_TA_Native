<?php

include "koneksi.php";
$id=$_GET['id_registration'];
$query="SELECT * FROM tb_regist WHERE id_regist='$id'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>

<h1 class="h3 mb-4 text-gray-800">Manage Registration</h1>
	<div class="container">
		<a href="?page=manage_registration" class="btn btn-dark text-white">Back</a><br><br>
		<form>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<th colspan="3" style="text-align: center;"><h4>Detail Registration</h4></th>
	</tr>
	</thead>
	<tr>
		<td>Tournament Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['tournament_name']?></td>
	</tr>
	<tr>
		<td>Team Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['team_name']?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['email']?></td>
	</tr>
	<tr>
		<td>Captain Name</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['captain_name']?></td>
	</tr>
	<tr>
		<td>Captain Nick</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['captain_nick']?></td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td style="text-align: center;"> : </td>
		<td><?php echo $data['phone_number']?></td>
	</tr>
</table>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<th style="text-align: center;"><h4>Member Name</h4></th>
		<th style="text-align: center;"><h4>Member Nickname</h4></th>
	</tr>
	</thead>
	<tr>
		<td><?php echo $data['member1']?></td>
		<td><?php echo $data['nick1']?></td>
	</tr>
	<tr>
		<td><?php echo $data['member2']?></td>
		<td><?php echo $data['nick2']?></td>
	</tr>
	<tr>
		<td><?php echo $data['member3']?></td>
		<td><?php echo $data['nick3']?></td>
	</tr>
	<tr>
		<td><?php echo $data['member4']?></td>
		<td><?php echo $data['nick4']?></td>
	</tr>
	<tr>
		<td><?php echo $data['member5']?></td>
		<td><?php echo $data['nick5']?></td>
	</tr>
</table>
</form>
</div>
