<?php
session_start();
include('../connect.php');
if(isset($_GET['edit_btn'])){
$_SESSION['id_to_edit']= $_GET["id"];
}
$id_to_edit=$_SESSION['id_to_edit'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from products where id ='$id_to_edit'"));
?>
<head>
	<style>
		
		fieldset{
			transform: translateX(500px);
			border-radius: 10px;
			 box-shadow: 0 10px 25px;
		}
	</style>
</head>
<div id="addfirstaids">
<form method="POST">

	<fieldset style="width: 500px">
		<legend><h1>Edit Product:</h1></legend>
		<label ><h2>product:</h2></label><input type="text" name="product" id="titles" value= "<?php echo $data['product']?>"> <br>
	<label ><h2>price:</h2></label><input type="text" name="price" id="editfirstaid" value= "<?php echo $data['price']?>">
	<label ><h2>Quantity:</h2></label><input type="text" name="amount" id="titles" value= "<?php echo $data['quantity']?>"> <br>
	
	<label ><h2>Discount:</h2></label><input type="text" name="discount" id="editfirstaid" value= "<?php echo $data['discount']?>"><br>
	<label ><h2>Unit:</h2></label><input type="text" name="category" id="editfirstaid" value= "<?php echo $data['category']?>"><br>
	<label ><h2>Category:</h2></label><input type="text" name="size" id="editfirstaid" value= "<?php echo $data['size']?>"><br>
	<label ><h2>Date:</h2></label><input type="date" name="date" id="titles" value= "<?php echo $data['enterdate']?>"> <br>

	<input type="Submit" name="ok" id="submit" value="Enter">
	</fieldset>

	</fieldset>
<?php

if(isset($_POST['ok'])){
    $product=$_POST["product"];
    $price=$_POST["price"];
    $quantity=$_POST["amount"];
    $date=$_POST["date"];
	$category=$_POST["category"];
    $discount=$_POST["discount"];
	$unit= $_POST["unit"];
$updateSQL= "UPDATE ";
$updateSQL.="products";
$updateSQL.=" SET product='$product', price='$price',quantity='$quantity',enterdate='$date',discount='$discount',category='$category',unit='$unit' where id='".$_SESSION["id_to_edit"]."'";
$resultUpdate=mysqli_query($conn,$updateSQL);
if(!$resultUpdate){
die(mysqli_error($con));
}
header("location:product.php");
}
?>
</form>	
</div>