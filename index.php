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
    <!-- header section starts -->
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
                <!-- <img src="images/cart1.png" alt=""> -->
                <div class="cart_number">
                <?php echo $count; ?>
                </div>
              </a>
              </div>
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="design-box">
        <!-- <img src="images/design-1.png" alt=""> -->
      </div>
      <div class="slider_number-container d-none d-md-block">
        <!-- <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span class="jwel">
            K <br>
            O <br>
            S <br>
            E <br>
            L <br>
            I 
          </span>
          <hr>
          <span>
            02
          </span>
        </div> -->
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol> -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <!-- <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2> -->
                    <h1>
                      Singing Bowl
                    </h1>
                    <p>
                    Singing bowls are traditional tools used to create relaxing harmonics and enhance personal meditation. 
                    The unique tonal sounds are created by tapping the side of the bowl with an instrument, or striker, then running the striker along the bowl's edge.
                    </p>
                    <div>
                      <a href="products.php">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/sing.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <!-- <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2> -->
                    <h1>
                      Lakhamari
                    </h1>
                    <p>
                    Lakhamari a typical newari sweet which is a traditional sweet among Nepali culture. 
                    It has two different taste according to its crunchiness and softness but has many varieties according to shape and sizes.
                    </p>
                    <div>
                      <a href="products">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/lakh.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <!-- <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2> -->
                    <h1>
                      Chhurpi
                    </h1>
                    <p>
                    Chhurpi otherwise known as durkha and chogo/chugo is a traditional cheese consumed in Bhutan and Nepal. 
                    The two varieties of chhurpi are a soft variety and a hard variety.
                    </p>
                    <div>
                      <a href="products.php">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/churpi.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->

  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Best Selling
            </h6>
          </div>
          <div class="img-box">
            <img src="images/sukuti.png" alt="">
          </div>
          <div class="name">
            <h5>
              Buff Sukuti
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best Selling
            </h6>
          </div>
          <div class="img-box">
            <img src="images/mask.png" alt="">
          </div>
          <div class="name">
            <h5>
              Mask
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best Selling
            </h6>
          </div>
          <div class="img-box">
            <img src="images/buddha.png" alt="">
          </div>
          <div class="name">
            <h5>
              Buddha Idol
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="images/design-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
              <h2>
                About KOSELI
              </h2>
            <p>
            Welcome to <b>KOSELI</b>, your one-stop destination for authentic, handcrafted items from Nepal. We are passionate about showcasing the rich cultural heritage and artisanal craftsmanship that Nepal is renowned for.            </p>
            <div>
              <a href="about.php">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/koseli.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  
  

  
  <!-- client section -->



  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="design-box">
      <img src="images/design-2.png" alt="">
    </div>
    
    
       
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="images/logo.png" alt="">
                <span>
                  KOSELI               
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                  Lalitpur
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/phone.png" alt="">
                <span>
                  042-8063004
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  koseli@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Connect With Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>