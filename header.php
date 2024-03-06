<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>KOSELI</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              KOSELI
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                 <li class="nav-item">
                 <li>
             <?php
                            session_start();
                            if(isset($_SESSION['uname'])){
                                ?>
                            <a class="nav-link">
                            <?php
                            echo $_SESSION['uname'];
                          ?>
                            </a>
                            <!-- <ul> -->
                                <li><a class="nav-link" href="history.php">History</a></li>
                                <li><a class="nav-link" href="logout.php">Logout</a></li>
                            <!-- </ul> -->
                            <?php
                            }else{
                            ?>
                            <a class="nav-link" href="login.php">Login</a>
                            <?php
                            }
                             ?>
        </li>
                </li> 
             
              </ul>

            </div>
            <div class="quote_btn-container ">
              <div>
            <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
            ?> 
              <a href="cart.php">
                
                <i class="fa-solid fa-cart-shopping"></i>
                <!-- <div class="cart_number"> -->
                <?php echo $count; ?>
                </div>
              </a>
              </div>
              <form class="form-inline" type="">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>    
      </div>
    </header>