<?php
include('connect.php');
include('header.php');
if(isset($_POST['submit'])){
$_SESSION['id_to_edit']= $_POST["id"];
}
$id_to_edit=$_SESSION['id_to_edit'];
$data=mysqli_query($conn,"SELECT * from products where category ='$id_to_edit'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
	<style>
		h3{
			font-size:large;
		}
	</style>

</head>
<body>
	<?php
foreach($data as $value){?>
	
<div style="float: left; margin-top:80px; ">
<tr><img src="<?php echo $value["photo"]  ?> " style="width:2in; height:2in; margin-right:1in; display:flex;"></tr>
<div style="border:solid pink 1px ; width: 250px;">
<tr><h3><?php echo $value["product"]  ?> </h3></tr>
<tr><h3> Rs.<?php echo $value["price"]  ?> </h3></tr>
<tr><h3>Available Quantity:<?php echo $value["quantity"]  ?> </h3></tr>
<tr><h3>Unit:<?php echo $value["unit"]  ?> </h3></tr>
<tr><h3> Discount:<?php echo $value["discount"]  ?> </h3></tr>
<!-- <tr><h3> Size:<?php echo $value["size"]  ?> </h3></tr> -->
<tr><h3> Date:<?php echo $value["enterdate"]  ?> </h3></tr>

<form method="post" action="manage_cart.php"> 
<input type="hidden" name="id" value="<?php echo  $value["id"] ?>">
<?php
if($value['quantity'] > 0){
if(isset($_SESSION['user_username'])){?>
<input type="submit" name="Add_To_Cart" value="Add to cart" style="background-color: #fbb534;">
<input type="hidden" name="Item_Name" value="<?php echo $value["product"]?>">
<input type="hidden" name="Price" value="<?php echo $value["price"]?>">
<?php } 
else{
	?> <a href="login.php"><input type="button" name="login" value="Login" style="background-color: #fbb534;"></a><?php
}
}
else{
	?> <a href="productdetail.php"><input type="button" name="out" value="Out of Stock" style="background-color: #fbb534;"></a><?php
}
?>
</form></div>
	</div>
<?php

}


?>
</body>
</html>