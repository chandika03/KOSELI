<?php
session_start();
include('connect.php');
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from student where email= '$email' and password='$password'";
$result=$conn->query($sql);
$data=mysqli_fetch_assoc($result);

$row=$result->fetch_assoc();
if($result->num_rows==1){

    $_SESSION['user_id']=$row['id'];
    $_SESSION['user_username']=$email;
    $_SESSION['user_password']=$row['password'];
    $_SESSION['uname']=$data['name'];
    echo $_SESSION['uname'];
    header('location:index.php');

}else{
    header('location:login.php?err=2');
}
?>