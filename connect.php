<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbName = "koseli";
  $conn = mysqli_connect($host,$username,$password,$dbName);

  if(!$conn){
    die("can not connect with database");
  }
   
?>