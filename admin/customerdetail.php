<?php
include('index.php');
include('../connect.php');
$data = mysqli_query($conn, "select * from student"); ?>

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
			<th>Name:</th>
			<th>Email:</th>
			<th>Phone:</th>
			<th>Address:</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach ($data as  $value) { ?>
			<tr>
				<td><?php echo $value["name"] ?></td>
				<td><?php echo $value["email"] ?></td>
				<td><?php echo $value["phonenumber"] ?></td>
				<td><?php echo $value["address"] ?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>