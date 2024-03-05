<?php
session_start();
include('connect.php');
//$data=mysqli_query($conn,"SELECT * FROM customer ORDER BY id DESC LIMIT 1");
$data =mysqli_query($conn,"SELECT * FROM customer_order
INNER JOIN customer
ON customer_order.order_id=customer.Id;");?>
<head>
	<style>
.center{
            width:100px;
            /*height:200px; */
            /* position: relative;
            background-color: pink;
            top: 50%;
            left: 50%; */
        }
		</style>
</head>
<body>
<h1 style="text-align: center; ">!THANK YOU!</h1>
<div class="container text-center mt-5 py-5">
            <h3 style="color:blue;text-align: center;">YOUR ORDER HAS BEEN PLACED SUCCESFULLY</h3>
            <hr>
             
        </div>
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
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
		<th>Item_name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Payment</th>
	</tr>

</thead>
<tbody>
	<?php
foreach ($data as  $value) {
	if($value['order_id'] == $_SESSION['order']){
	?>
	<tr>
		<td><?php echo $value["Fullname"];?></td>
		<td><?php echo $value["Phone"];?></td>
		<td><?php echo $value["Email"];?></td>
		<td><?php echo $value["address"];?></td>
		<td><?php echo $value["item_name"];?></td>
		<td><?php echo $value["price"];?></td>
		<td><?php echo $value["quantity"];?></td>
		<td><?php echo $value["Delivery"];?></td>
	</tr>
	<?php }	
}
?>
	<form action="update.php" method="post">
				<td colspan="2" style="font-weight:bold;">Press Ok to successfully send order</td>
				<td><input type="submit" class="center" name="ok" value="Ok" style="background-color:pink;"> </td>
				<td colspan="4" style="font-weight:bold;">Press cancel to cancel order or add more item in cart</td>
				<td><input type="submit" class="center" name="cancel" value="Cancel" style="background-color:pink;"></td>
	</form>
	</tbody>
</table>
	<?php 
	if(isset($_SESSION['user_username'])){
	mysqli_query($conn,"UPDATE customer SET status=1 WHERE id = (SELECT MAX(ID) FROM customer)"); }
            ?>	
</body>