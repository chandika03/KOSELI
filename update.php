<?php
session_start();
include('connect.php');
$order = $_SESSION['order'];
if(isset($_POST['ok'])){
$query1 = "select * from customer_order where order_id='$order'";
$query3 = "select * from products";
$presult = mysqli_query($conn, $query3) or die("Failed to get product data");
$result = mysqli_query($conn, $query1) or die("Failed to get data");
foreach($result as $value){
    $itemName = $value['item_name'];
    $quan = $value['quantity'];
    foreach($presult as $pvalue){
    if($pvalue["product"]==$itemName){
        $q = $pvalue["quantity"];
        if($q >= $quan){
            $q = $q - $quan;
        }
        $query2 = "update products set quantity='$q' where product='$itemName'";
        mysqli_query($conn, $query2) or die("Failed to update table");
    }
    }
}
unset($_SESSION['cart']); 
echo"<script>
window.location.href='index.php';
</script>";
}
if(isset($_POST['cancel'])){
    $query4 = "delete from customer_order where order_id='$order'";
    mysqli_query($conn, $query4) or die("Failed to delete record from customer_order");
    $query5 = "delete from customer where id='$order'";
    mysqli_query($conn, $query5) or die("Failed to delete record from customer");
echo"<script>
window.location.href='cart.php';
</script>";

}
?>