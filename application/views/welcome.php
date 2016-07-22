<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
	<style media="screen">
	header h3{
		display:inline-block;
		vertical-align: top;
	}
	header button{
		display:inline-block;
		vertical-align: top;
		margin-left: 1400px;
	}
	</style>

</head>
<body>
<header>
	<h3>Welcome <?=$this->session->userdata('first_name')?>! </h3>
	<p> 4 people poked you </p>
	<form action="/Students/logout" method="post">
		<button>LogOut</button>
	</form>
</header>
	<fieldset>
		<legend>Who Poked You </legend>
		<?php foreach($poked as $poke){
		?>
				<p><?=$poke['first_name']?> poked you <?=$poke['poke']?> times.</p>
		<?php }
		?>

	</fieldset>

	<fieldset>
	<legend> Poke Wars</legend>
	<form action="/Students/logout" method="post">

<h4> People You may want to Poke: </h4>
		<table>
			<tr>
			<th>Name</th>
			<th>Alias</th>
			<th>Email Address</th>
			<th>Poke History</th>
			<th>Action</th>
			</tr>
			<?php foreach ($students as $student){
				?>
			<tr>
				<td><?=$student['first_name']?></td>
				<td><?=$student['alias']?></td>
				<td><?=$student['email']?></td>
				<td><?=$student['poke']?> Pokes</td>
				<td>
				<form action="/Students/poke/<?=$student['id']?>" method="post">
					<button>Poke</button>
				</form>
			</td>
			</tr>

			<?php
		 }
			?>
		</table>
	</fieldset>
</body>
</html>
