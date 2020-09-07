<?php
session_start();
if (isset($_SESSION['user'])) {
  include 'controller/connection.php';
}

?>

<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comprar </title>
  <meta name="keywords" content="themeforest template" />
  <meta name="description" content="best responsive html template in themeforest">
  <meta name="author" content="codelayers">

  <!-- Mobile view -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/fav-icon.ico">
  <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

  <!-- Google fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

  <!-- Template's stylesheets -->
  <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
  <link rel="stylesheet" href="css/theme-default.css" type="text/css">
  <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
  <link rel="stylesheet" href="css/corporate.css" type="text/css">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
  <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="plugins/sweetAlert/sweetAlert.css">
  <!-- Template's stylesheets END -->


</head>

<body>
  <!-- <div class="over-loader loader-live">
  <div class="loader">
			<div class="loader-item style4">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
</div> -->
  <!--end loading-->



  <div class="wrapper-boxed">
    <div class="site-wrapper">
      <div class="col-md-12 nopadding">
        <div class="header-section white dark-dropdowns style1 links-dark pin-style">
          <div class="container">
            <div class="mod-menu">
              <div class="row">
                <div class="col-sm-3"> <a href="index.html" title="" class="logo mar-4"> <img src="images/logo/logo-dark.png" alt=""> </a> </div>
                <div class="col-sm-9">
                  <div class="main-nav">
                    <ul class="nav navbar-nav top-nav">


                    </ul>
                    <div id="menu" class="collapse">
                      <ul class="nav navbar-nav">
                        <li class="right "> <a href="index.php">Inicio</a> <span class="arrow"></span>
                        </li>
                        <li> <a href="shop.php">Productos</a> <span class="arrow"></span>

                        </li>
                        <li class="active"> <a href="#">Contáctanos</a> <span class="arrow"></span>

                        </li>



                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end menu-->

      </div>
      <!--end menu-->

      <div class="clearfix"></div>


      <section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
          <div class="background-imgholder" style="background:url(images/header-inner-1.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt="" /> </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
              <div class="header-inner less-height">
                <div class="overlay">
                  <div class="text text-center">
                    <h3 class="uppercase text-white less-mar-1 title">Comprar Producto</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class=" clearfix"></div>
      <!--end header section -->

      <div class="clearfix"></div>
      <!--end section-->

      <?php
      include "controller/connection.php";
      $id_ = $_REQUEST['id'];
      $e = $con->query("SELECT * FROM products WHERE id = '$id_'");
      $row = $e->fetch_assoc();
      ?>
      <section class="sec-padding section-light">
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-md-6"> <img style="width: 100%; height: 500px; object-fit: contain;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" alt="" class="img-responsive" /> </div>
            <!--end item-->

            <div class="col-md-6 padding-left-6">

              <div class="col-md-10">
                <div class="col-sm-12 nopadding">
                  <div class="sec-title-container less-padding-4 text-left">
                    <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Mira los detalles del producto</h5>
                    <h2 class="font-weight-6 less-mar-1 line-height-5"><?php echo $row['name'] ?></h2>
                    <div class="ce-title-line align-left"></div>
                    <h3 class="font-weight-6 less-mar-1 line-height-5"> Precio: <?php echo number_format($row['price']) ?></h3>
                  </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->


                <p>Llevate este expectacular producto, compra y recibe toda nuestra atención y disposición, tu eliges el método de pago y el método de entrega, el producto te lo entregamos con factura y grantia </p>

                <br />
                <div class="col-md-12 nopadding">
                  <ul class="iconlist primary">
                    <li><i class="fa fa-check"></i> Envíos Nacionales</li>
                    <li><i class="fa fa-check"></i> Pagos Contra entrega en Bogotá </li>
                    <li><i class="fa fa-check"></i> Aceptamos todos los métodos de pago </li>

                  </ul>
                </div>
                <form id="form_buy">
                  <?php
                  $user = $_SESSION['user'];
                  ?>
                  <input type="text" style="display: none;" name="user_id" value="<?php echo $user ?>">
                  <input type="text" style="display: none;" name="product_id" value="<?php echo $row['id'] ?>">
                  <input type="text" style="display: none;" name="product_name" value="<?php echo $row['name'] ?>">
                  <input type="text" style="display: none;" name="product_price" value="<?php echo $row['price'] ?>">
                  <button id="btn_buy" class="btn" style="background: #69CA21; color:white;">Comprar</button>
                </form>

              </div>
              <!--end item-->


            </div>
            <!--end item-->

          </div>
          <!--end item-->

        </div>
      </section>
      <!-- end section -->

      <!-- end section -->

      <!-- end section -->

      <section class="sec-padding-6 section-medium-dark">
        <div class="container">
          <div class="row">
            <div class="fo-copyright-holder text-center"> Copyright © 2020 CHIPHYSI | All rights reserved. </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!-- end section -->



      <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

    </div>
    <!--end site wrapper-->
  </div>
  <!--end wrapper boxed-->

  <!-- Scripts -->
  <script src="js/jquery/jquery.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Scripts END -->

  <!-- Template scripts -->
  <script src="js/megamenu/js/main.js"></script>
  <script src="js/owl-carousel/owl.carousel.js"></script>
  <script src="js/owl-carousel/custom.js"></script>
  <script src="js/parallax/parallax-background.min.js"></script>
  <script>
    (function($) {
      $('.parallax').parallaxBackground();
    })(jQuery);
  </script>


  <script>
    $(window).load(function() {
      setTimeout(function() {

        $('.loader-live').fadeOut();
      }, 1000);
    })
  </script>
  <script src="js/functions/functions.js"></script>
  <script src="js/_main/buy.js"></script>
  <script src="plugins/sweetAlert/sweetAlert.js"></script>

</body>

</html>