<?php
include('index.php');
include('../connect.php');
$path=__DIR__;
if(isset($_POST['submit'])){
move_uploaded_file($_FILES["photo"]["tmp_name"],$path."/category_images"."/".$_FILES["photo"]["name"]);
$photo='/koseli/admin/category_images/'.$_FILES["photo"]["name"];
$product=$_POST["product"];
$insert="INSERT INTO category(categoryname,photo) values('$product','$photo') ";
mysqli_query($conn,$insert);
}
$data_product="SELECT * from category";
$data=mysqli_query($conn,$data_product);
?>
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.textarea{
			width: 800px; 
			border-radius: 20px;
			background-color: #FFF5D1 ;		}
			.btn_edit{
			background:lightgreen;
			width:70px;
			height:45px;
			font-size: 20px;
			border-radius: 20px;
			 box-shadow: 0 10px 25px;
		}
		.btn_remove{
			background:#FF6347;
			width:70px;
			height:45px;
			font-size: 20px;
			border-radius: 20px;
			 box-shadow: 0 10px 25px;
		}
		.space{
			max-width:200px;
			min-width:200px;}
			.space1{
			max-width:600px;
			min-width:600px;}
	
	#tbl_title{
			padding:10px;
			max-width:200px;
			min-width:200px;
		}
		#tbl_firstaids{
			padding:10px;
			max-width:200px;
			min-width:200px;
			word-break: break-all;
		}
	</style>
</head>
<body>
<div class="main-content">
			<div id="firstaids">
<form style="width:900px;" method="POST" enctype="multipart/form-data" >
	
		<legend><h2>Add Products:</h2></legend>
	
	<label ><b>Category Name</b></label></br><input class="textarea" type="text" name="product"  style="height: 50px;"></br></br>
	<label><b>Photo:</b></label>
	<input type="file" accept="image/x-png,image/jpeg" name="photo" id="photo">
	
	<input type="Submit" style="height:30px; background: lightgreen; border-radius: 20px; padding:5px; " name="submit" class="btn_edit" value="Add">
	
</form>
</div>
<div id="firstaid">
	<h1>Category:</h1>
	<table >
		<tr>
        <td class="space"><h3>Photo</h3></td> 
        <td class="space"><h3>Name</h3></td>

</tr>
</table >
<?php
foreach($data as $value){
?>
<table id="tbl_firstaid">
<tr>
	        <td>    <img style="width:2in; height:2in;" src="<?php print_r( $value["photo"] )?>" /> 
</h3></b></td>
	<td id= "tbl_title"><b><h3><?php print_r( $value['categoryname']); ?></h3><b> </td>
	<td><form method="POST" action="deletecategory.php"><input type ="hidden" name="id" value=" <?php echo $value["id"]  ?>"><input type="Submit" name="delete_btn" value= "Delete" class="btn_remove"></form>

		<form method="GET" action="editcategory.php"><input type ="hidden" name="id" value=" <?php echo $value["id"]  ?>"><input type="Submit" name="edit_btn" value= "Edit" class="btn_edit"></form></td>
</tr>
</table>
<?php } ?> 
</div>
	</div>

</body>

</html>