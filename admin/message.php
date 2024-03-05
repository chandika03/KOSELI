<?php
include('index.php');
include('../connect.php');
$data = mysqli_query($conn, "select * from contact_page"); ?>
<h1 style="text-align: center;">Message:</h1>
<style>
	table,
	th,
	td,
	tr {
		border: 1px solid;
		border-collapse: collapse;
		width: 60%;
		font-size: 20px;
		text-align: center;
		padding: 10px;
		padding-left: 15px;
		padding-right: 15px;
		border-color: pink;

	}
</style>

<table style="transform: translateX(300px);">
	<thead>

		<tr>
			<th>Firstname:</th>
			<th>Lastname</th>
			<th>Email:</th>
			<th>Message:</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach ($data as  $value) { ?>
			<tr>
				<td><?php echo $value["firstname"] ?></td>
				<td><?php echo $value["lastname"] ?></td>
				<td><?php echo $value["email"] ?></td>
				<td><?php echo $value["message"] ?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>