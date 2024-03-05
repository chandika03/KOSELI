<?php
session_start();
include('../connect.php');
if(isset($_GET['edit_btn'])){
$_SESSION['id_to_edit']= $_GET["id"];
}
$id_to_edit=$_SESSION['id_to_edit'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from category where id ='$id_to_edit'"));
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
		<label ><h2>product:</h2></label><input type="text" name="product" id="titles" value= "<?php echo $data['categoryname']?>"> <br>
	<input type="Submit" name="ok" id="submit" value="Enter">
	</fieldset>

	</fieldset>
<?php

if(isset($_POST['ok'])){
    $category=$_POST["product"];
$updateSQL= "UPDATE ";
$updateSQL.="category";
$updateSQL.=" SET categoryname='$category' where id='".$_SESSION["id_to_edit"]."'";
$resultUpdate=mysqli_query($conn,$updateSQL);
if(!$resultUpdate){
die(mysqli_error($con));
}
header("location:category.php");
}
?>
</form>	
</div>