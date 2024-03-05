
<?php
session_start();
include('connect.php');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from admin where username= '$username' and password='$password'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();
if($result->num_rows==1){

    $_SESSION['admin_id']=$row['id'];
    $_SESSION['admin_username']=$row['username'];
    $_SESSION['admin_password']=$row['password'];

    header('location:admin/admindashboard.php');

}else{
    header('location:adminlogin.php?err=2');
}
}


 ?>