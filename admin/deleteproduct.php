<?php
include('../connect.php');
if(isset($_POST['delete_btn'])){
    $id_to_delete=$_POST["id"];
    $delete="DELETE FROM products where id='$id_to_delete'";
    mysqli_query($conn,$delete);
    header('location:product.php');

}
?>