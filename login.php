<?php 
include('database.php');
if(isset($_GET['err'])&& $_GET['err']==2){?>
<script>
  alert("Please enter correct email /password.");
  </script>
 
  <?php
}
//  session_start();
// $_SESSION['uname'] = $data['uname'];
// echo $_SESSION['uname'];
// header('Location:../index.php?msg='.$msg);
  ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>User Login</title>
  </head>
  <?php include "header.php"?>
  <body>

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="userlogin.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="registration.php">Signup now</a></div>
          <div class="signup-link">Sign in as admin <a href="adminLogin.php">Admin Login</a></div>
        </form>
      </div>
    </div>
  </body>
</html>