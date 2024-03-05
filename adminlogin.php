<?php 
include('connect.php');
if(isset($_GET['err'])&& $_GET['err']==2){?>
  <script> alert("Please enter correct email /password.")</script>

  <?php
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <!--for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
<?php
include'header.php';
?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Admin Login Form</span></div>
        <form action="admin.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password"placeholder="Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Login">
          </div>
        </form>
  </body>
</html>

