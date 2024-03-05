<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
    <script src="jsvalidation.js"></script>
    <title>Registration</title>
   
   </head>
<body>
    <?php 
    include "header.php"
    ?>
  <div class="wrapper" style="align-content:centre;">
    <h2>Registration</h2>
    <form action="database.php" id="form" method="post" onsubmit="return submitForm()" >
      <div class="input-box">
      <div class="input-control">
        <input type="text" id="username" name="uname" placeholder="Enter your name" auto-complete=off onkeyup="return submitForm()"><span id="uspan"></span>
        <div class="error"></div>
      </div>
      </div>
      <div class="input-box" >
      <div class="input-control">
        <input type="email" name="email" id="uemail" placeholder="Enter your email" auto-complete=off onkeyup="return submitForm()"><span id="espan"></span>
        <div class="error"></div>
</div>
      </div>	  
      <div class="input-box">
      <div class="input-control">
        <input type="text" name="address" id="uaddress" placeholder="Enter your address" onkeyup="return submitForm()"><span id="aspan"></span>    
        <div class="error"></div>
</div>
      </div>
      <div class="input-box">
        <div class="input-control">
        <input type="text" name="phonenumber" id="unumber"  placeholder="Enter your phonenumber" onkeyup="return submitForm()"><span id="cspan"></span>
        
        <div class="error"></div>
</div>
      </div>
      <div class="input-box">
      <div class="input-control">
        <input type="password" id="upassword" name="password" placeholder="Create password"  onkeyup="return submitForm()"><span id="pspan"></span>
        
        <div class="error"></div>
</div>
      </div>
      
      
      <div class="input-box">
      <div class="input-control">
        <input type="password" id="upassword2" name="password2" placeholder="Confirm password" onkeyup="return submitForm()"><span id="rspan"></span>
        
        <div class="error"></div>
</div>
      </div>
      
      
      <div class="input-box button">
        <input type="submit" value="Register now" name="submit" onsubmit="return submitForm()">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
        
      </div>
    </form>
  </div>
  

  
</body>
</html>