<?php
include('connect.php');
include('header.php');
$user = $_SESSION['user_username'];
$data=mysqli_query($conn,"select * from customer where email='$user'");?>
<h1 style="text-align: center; transform: translateY(60px);">Your Order History:</h1>
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
<table style="transform: translateX(300px); transform: translateY(70px);">
<thead>
	<tr>
		<td>Name:</td>
		<td>Phone:</td>
		<td>Email:</td>
		<td>Address:</td>
		<td>order id</td>
		<td>Item_name</td>
		<td>price</td>
		<td>quantity</td>
	</tr>
	</thead>
 <tbody>
	<?php
	if($data){
foreach ($data as  $value) {
	$order = $value['id'];
	$odata=mysqli_query($conn,"select * from customer_order where order_id='$order'");
	foreach($odata as $uvalue){?>
	<tr>
	<td><?php echo $value["Fullname"];?></td>
	<td><?php echo $value["Phone"];?></td>
	<td><?php echo $value["Email"];?></td>
	<td><?php echo $value["address"];?></td>
	<td><?php echo $uvalue["order_id"];?></td>
	<td><?php echo $uvalue["item_name"] ?></td>
	<td><?php echo $uvalue["price"] ?></td>
	<td><?php echo $uvalue["quantity"] ?></td>
</tr>
<?php
}
}
	}
?>
	</tbody>
</table>