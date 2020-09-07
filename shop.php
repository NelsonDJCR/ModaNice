<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tienda </title>
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
  <link rel="stylesheet" href="css/shop.css" type="text/css">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
  <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="js/product-preview/stylesheet.css">
  <link rel="stylesheet" href="js/product-preview/fancybox/jquery.fancybox.css">



</head>

<body>
  <div class="over-loader loader-live">
  <div class="loader">
			<div class="loader-item style4">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
</div>
  <!--end loading-->



  <div class="wrapper-boxed">
    <div class="site-wrapper">

      <div class="clearfix"></div>
      <!--end topbar-->

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
                        <li class="active"> <a href="#">Productos</a> <span class="arrow"></span>

                        </li>
                        <li> <a href="contact.php">Contáctanos</a> <span class="arrow"></span>

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
          <div class="background-imgholder" style="background:url(images/header-inner-2.jpg);"><img class="nodisplay-image" src="images/header-inner-2.jpg" alt="" /> </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
              <div class="header-inner less-height">
                <div class="overlay">
                  <div class="text text-center">
                    <h3 class="uppercase text-white less-mar-1 title">Tienda Virtual</h3>
                    <h6 class="uppercase text-white sub-title">Mira todos nuestros productos de la plataforma</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class=" clearfix"></div>
      <!--end header section -->

      <section>
        <div class="pagenation-holder">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h3>Nuestros productos</h3>
              </div>
              <div class="col-md-6">
                <ol class="breadcrumb">
                  <li><a href="index.php">Inicio</a></li>
                  <li class="current"><a href="#">Tienda</a></li>
                </ol>
              </div>

            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!--end section-->


      <section class="sec-padding">
        <div class="container">
          <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12 margin-bottom">

              <div class="sidebar-item-holder">
                <h5 class="uppercase sp-sb-title">Busqueda</h5>
                <input type="text" name="name" class="sp-news-letter" value="" placeholder="Buscar" maxlength="100" />
              </div>


            </div>
            <!--end right column -->
            <div class="col-md-9 col-sm-12 col-xs-12">
              <div class="divider-line solid light"></div>
              <br /><br />
              <div class="col-xs-12 nopadding">
                <div class="sec-title-container text-center">
                  <h6 class="uppercase font-weight-4 less-mar-1 text-primary">Nuestra colección</h6>
                  <div class="sp-title-line-1"></div>
                </div>
              </div>
              <div class="clearfix"></div>

              <!--end title DIV porductos-->

              <?php
                include "controller/connection.php";
                $e = $con->query("SELECT * FROM products ORDER BY id DESC");

                while ($row = $e->fetch_assoc()) {
                ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="sp-feature-box-3 margin-bottom">
                  <div class="img-box"> <a href="buy.php?id=<?php echo $row['id']?>" class="view-btn uppercase">Ver</a>
                    <img style="height: 300px; width: 300px; object-fit: cover;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" alt="" class="img-responsive" />
                  </div>
                  <div class="clearfix"></div>
                  <br />
                  <h5 class="less-mar-1"><?php echo $row['name']?></h5>
                  <p>Tallas: <?php echo $row['size']?></p>
                  <h5 class="text-primary">$ <?php echo number_format($row['price'])?></h5>
                  <br />
                </div>
              </div>
                <?php } ?>

              
              <!--end item-->



            </div>
            <!--end left column -->

          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!-- end section -->


      <!-- end section -->

      <section class="section-primary sec-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h4 class=" uppercase font-weight-3 text-white">SIGN UP FOR OUR NEWSLETTER & PROMOTIONS</h4>
              <div class="sp-feature-box-4">
                <input type="search" placeholder="Email Address">
                <input name="search" value="Subscribe" class="submit-btn" type="submit">
              </div>
            </div>
            <!--end item-->

          </div>
        </div>
      </section>
      <!-- FOOTER -->
       <!-- FOOTER -->
       <section class="sec-padding-6 section-medium-dark">
        <div class="container">
          <div class="row">
            <div class="fo-copyright-holder text-center"> Moda Nice © Todos los derechos reservados </div>
          </div>
        </div>
      </section>
      <!-- END FOOTER -->
      <!-- FOOTER END -->
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

  <!-- lightbox -->
  <script src="js/lightbox/jquery.fancybox.html"></script>
  <script src="js/lightbox/custom.html"></script>

  <!--product preview-->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
  <script src="js/product-preview/fancybox/jquery.fancybox.js"></script>

  <script>
    $(document).ready(function() {
      $('.product_preview_left .previews a').click(function() {
        var largeImage = $(this).attr('data-full');
        $('.selected').removeClass();
        $(this).addClass('selected');
        $('.full img').hide();
        $('.full img').attr('src', largeImage);
        $('.full img').fadeIn();


      }); // closing the listening on a click
      $('.full img').on('click', function() {
        var modalImage = $(this).attr('src');
        $.fancybox.open(modalImage);
      });
    }); //closing our doc ready
  </script>
  <script>
    $(window).load(function() {
      setTimeout(function() {

        $('.loader-live').fadeOut();
      }, 1000);
    })
  </script>
  <script src="js/functions/functions.js"></script>
</body>

</html>