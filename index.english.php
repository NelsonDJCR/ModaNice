<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Moda Nice </title>
  <meta name="keywords" content="themeforest template" />
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
  <link rel="stylesheet" type="text/css" href="js/revolution-slider/css/settings.css">
  <link rel="stylesheet" type="text/css" href="js/revolution-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="js/revolution-slider/css/navigation.css">
  <link rel="stylesheet" href="js/parallax/main.css">
  <link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
  <link href="js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
  <link href="js/accordion/css/smk-accordion.css" rel="stylesheet">
  <link rel="stylesheet" href="js/parallax/main.css">
  <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">


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
      <!-- Menú -->
      <div class="col-md-12 nopadding">
        <div class="header-section style1 pin-style">
          <div class="container">
            <div class="mod-menu">
              <div class="row">
                <div class="col-sm-2"> <a href="index.html" title="" class="logo style-2 mar-4"> <img src="images/logo/logo.png" alt=""> </a> </div>
                <div class="col-sm-10">
                  <div class="main-nav">

                    <div id="menu" class="collapse">
                      <ul class="nav navbar-nav">
                        <li class="right active"> <a href="#">Home</a> <span class="arrow"></span>
                        </li>
                        <li> <a href="shop.php">Products</a> <span class="arrow"></span>

                        </li>
                        <li> <a href="contact.php">Contact Us</a> <span class="arrow"></span>

                        </li>

                        <li class="right"> <a href="#"> <i aria-hidden="true" class="fa fa-user"></i> </a> <span class="arrow"></span>
                          <ul>
                            <?php 
                            if (isset($_SESSION['user'])) {
                              echo "<li> <a href='customer'></a> Profile</li>
                              <li> <a href='controller/login.close.php'>Logout</a> </li>";
                            }
                            else{
                              echo "<li> <a href='login.php'>Log in</a> </li>";
                              echo "<li> <a href='register.php'> Sing up</a> </li>";
                            }
                            ?>
                            
                            

                          </ul>
                        </li>
                        <li class="right"> <a href="#"> <i aria-hidden="true" class="fa fa-globe"></i> Language </a> <span class="arrow"></span>
                          <ul>
                            <li> <a href="index.php">Spanish</a> </li>
                            <li> <a href="#">English</a> </li>

                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!--end menu-->

      <div class="clearfix"></div>
      <!-- SECCION BANNER -->
      <div class="slide-tmargin">
        <div class="slidermaxwidth">
          <div class="rev_slider_wrapper">
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="rev_slider" class="rev_slider" data-version="5.0">
              <ul>

                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="fade">

                  <!-- MAIN IMAGE -->
                  <img src="images/sliders/12.jpg" alt="" width="1920" height="1280">

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption raleway white uppercase text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['270','240','240','200']" data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">you want to design your clothes? </div>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','100','100','110']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Clothing design </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['390','150','150','150']" data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We make textile</div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut2 btn-round" data-x="['center','center','center','center']" data-hoffset="['-100','-100','-120','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','300']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Empezar Ahora!</a> </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut5 btn-round" data-x="['center','center','center','center']" data-hoffset="['120','120','140','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','370']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="services.php">Más información!</a> </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-2" data-transition="slideleft">

                  <!-- MAIN IMAGE -->
                  <img src="images/sliders/13.jpg" alt="" width="1920" height="1280">

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption raleway white uppercase text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['270','240','240','200']" data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Look at some of our products, visit our</div>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme/" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','100','100','110']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Store</div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['390','150','150','150']" data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Online </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut2 btn-round" data-x="['center','center','center','center']" data-hoffset="['-100','-100','-120','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','300']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">See</a> </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut5 btn-round" data-x="['center','center','center','center']" data-hoffset="['120','120','140','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','370']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">More information</a> </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="slideleft">

                  <!-- MAIN IMAGE -->
                  <img src="images/sliders/11.jpg" alt="" width="1920" height="1280">

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption raleway white uppercase text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['270','240','240','200']" data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We design mouth covers</div>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','100','100','110']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Mask design</div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['390','150','150','150']" data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"> </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut2 btn-round" data-x="['center','center','center','center']" data-hoffset="['-100','-100','-120','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','300']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">See</a> </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sbut5 btn-round" data-x="['center','center','center','center']" data-hoffset="['120','120','140','0']" data-y="['top','top','top','top']" data-voffset="['550','350','370','370']" data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;" data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;" data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="sevices.php">More information</a> </div>
                </li>
              </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
          </div>
        </div>
        <!-- END REVOLUTION SLIDER WRAPPER -->
      </div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
      <!-- SECCION BANNER end -->



      <!-- SECCIÓN SERVICIOS -->
      <section class="section-side-image section-light sec-padding clearfix">
        <div class="img-holder col-md-12 col-sm-3 pull-left">
          <div class="background-imgholder" style="background:url(images/30.jpg);"><img class="nodisplay-image" src="images/30.jpg" alt="" /> </div>
        </div>
        <div class="container">
          <div class="row">

            <div class="col-sm-12">
              <div class="sec-title-container text-center">
                <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our services</h5>
                <h2 class="font-weight-6 less-mar-1 line-height-5">Get to know us and learn a little about us </h2>
                <div class="ce-title-line"></div>
                <h6 class="ce-sub-text raleway">We are a micro company located in the city of Bogotá, Colombia, we are dedicated to making clothes where you are the one who decides how you want the design, you can also see some of our designs, maybe some of you may be interested</h6>
              </div>
            </div>
            <div class="clearfix"></div>
            <!--end title-->


            <div class="col-md-3">
              <div class="ce-feature-box-21 text-center margin-bottom">
                <div class="text-box">
                  <div class="iconbox-medium center outline-gray-2 round icon"><span class="fa fa-plane"></span></div>
                  <div class="clearfix"></div>
                  <br />
                  <h5 class="title font-weight-5">National Shipments</h5>
                  <p class="content">If you are not in Bogotá, do not worry, we will send your order to your door</p>
                  <br />
                </div>
              </div>
            </div>
            <!--end item-->

            <div class="col-md-3">
              <div class="ce-feature-box-21 primary text-center margin-bottom">
                <div class="text-box">
                  <div class="iconbox-medium center outline-gray-2 round icon"><span class="icon-pencil"></span></div>
                  <div class="clearfix"></div>
                  <br />
                  <h5 class="title font-weight-5">Design</h5>
                  <p class="content">You want to make a t-shirt or other garment, you are the one who decides how you want the design</p>
                  <br />
                </div>
              </div>
            </div>
            <!--end item-->

            <div class="col-md-3">
              <div class="ce-feature-box-21 text-center margin-bottom">
                <div class="text-box">
                  <div class="iconbox-medium center outline-gray-2 round icon"><span class="fa  fa-motorcycle"></span></div>
                  <div class="clearfix"></div>
                  <br />
                  <h5 class="title font-weight-5">Shipments Against Delivery</h5>
                  <p class="content">If you return to the city of Bogotá, we will take the product to your door and pay when you receive</p>
                  <br />
                </div>
              </div>
            </div>
            <!--end item-->

            <div class="col-md-3">
              <div class="ce-feature-box-21 text-center margin-bottom">
                <div class="text-box">
                  <div class="iconbox-medium center outline-gray-2 round icon"><span class="fa fa-shopping-basket"></span></div>
                  <div class="clearfix"></div>
                  <br />
                  <h5 class="title font-weight-5">Store Online</h5>
                  <p class="content">Visit our virtual store, where you can see all our products and designs</p>
                  <br />
                </div>
              </div>
            </div>
            <!-- end item -->

          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!-- SECCIÓN SERVICIOS  end -->


      <!-- SECTION SUSCRIBIRSE -->
      <div class="parallax vertical-align" data-parallax-bg-image="images/parallax/1.jpg" data-parallax-speed="0.9" data-parallax-direction="down">
        <div class="parallax-overlay bg-opacity-8">
          <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">
              <div class="ce-feature-box-10">
                <div class="col-sm-12">
                  <div class="sec-title-container less-padding-3 text-center">
                    <h2 class="font-weight-6 less-mar-1 line-height-5 text-white">Subscribe </h2>
                    <h6 class="text-white">And receive information about offers and available products</h6>
                  </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->

                <div class="col-md-8 col-centered">
                  <form action="">
                    <input class="newsletter" type="search" placeholder="Correo electrónico">
                    <input name="search" value="Sucribirse" class="newsletter-btn" type="submit">
                  </form>
                </div>
                <!--end item-->

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- SECTION SUSCRIBIRSE end -->




      <!-- SECCIÓN TIENDA -->
      <section class="sec-padding">
        <div class="container">
          <div class="row slide-controls-2">

            <div class="col-sm-12">
              <div class="sec-title-container text-center">
                <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our products </h5>
                <h2 class="font-weight-6 less-mar-1 line-height-5">Featured Products</h2>
                <div class="ce-title-line"></div>
                <h6 class="ce-sub-text raleway">These are some of our most outstanding products<br> <a href="shop.php">See more</a></h6>
              </div>
            </div>
            <div class="clearfix"></div>
            <!--end title-->


            <div id="owl-demo3" class="owl-carousel owl-theme">
              <div class="item">

                <?php
                include "controller/connection.php";
                $e = $con->query("SELECT * FROM products ORDER BY RAND() LIMIT 4");

                while ($row = $e->fetch_assoc()) {
                ?>
                  <!-- Top Item  REPETIR *4 -->
                  <div class="col-md-3">
                    <div class="ce-feature-box-30">
                      <div class="img-box">
                        <div class="overlay">
                          <a href="#">
                            <div class="btn-strip uppercase"><a href="buy.php?id=<?php echo $row['id']?>" style="color:white;">Comprar</a>  </div>
                          </a>
                        </div>
                        <img style="height: 300px; width: 300px; object-fit: cover;" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>" alt="" class="img-responsive" />
                      </div>
                    </div>
                    <div class="text-box text-center">
                      <h5 class="title font-weight-5"><?php echo $row['name']?></h5>
                    </div>
                  </div>
                  <!--end item-->
                <?php } ?>

              </div>
              <!--end item-->

            </div>
            <!--end carousel item-->



          </div>
          <!--end carousel-->

        </div>
    </div>
    </section>
    <div class="clearfix"></div>
    <!-- SECCIÓN TIENDA end -->











    <!-- FOOTER -->

    <div class="clearfix"></div>
    <!-- end section -->
    <!-- FOOTER -->
    <section class="sec-padding-6 section-medium-dark">
      <div class="container">
        <div class="row">
          <div class="fo-copyright-holder text-center"> Moda Nice © All rights reserved </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- END FOOTER -->
    <!-- end section -->

    <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a><!-- end scroll to top of the page-->

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
  <script src="js/ytplayer/jquery.mb.YTPlayer.js"></script>
  <script src="js/ytplayer/elementvideo-custom.js"></script>
  <script src="js/ytplayer/play-pause-btn.js"></script>
  <!-- REVOLUTION JS FILES -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
  <script src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
  <script>
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function() {
      if (tpj("#rev_slider").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider");
      } else {
        revapi4 = tpj("#rev_slider").show().revolution({
          sliderType: "standard",
          jsFileLocation: "js/revolution-slider/js/",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            arrows: {
              style: "uranus",
              enable: true,
              hide_onmobile: false,
              hide_under: 100,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 80,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 80,
                v_offset: 0
              }
            },
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            },



          },
          viewPort: {
            enable: true,
            outof: "pause",
            visible_area: "80%"
          },

          responsiveLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [850, 730, 600, 550],
          lazyType: "smart",
          parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          disableProgressBar: "on",
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    }); /*ready*/
  </script>
  <script>
    var tpj = jQuery;

    var revapi280;
    tpj(document).ready(function() {
      if (tpj("#rev_slider_280_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_280_1");
      } else {
        revapi280 = tpj("#rev_slider_280_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: "../../revolution/js/",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {},
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1000, 1024, 778, 480],
          gridheight: [700, 520, 420, 420],
          lazyType: "none",
          parallax: {
            type: "scroll",
            origo: "slidercenter",
            speed: 1000,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            type: "scroll",
          },
          shadow: 0,
          spinner: "spinner2",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "60",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
      }
    }); /*ready*/
  </script>
  <script>
    $(window).load(function() {
      setTimeout(function() {

        $('.loader-live').fadeOut();
      }, 1000);
    })
  </script>
  <script src="js/parallax/parallax-background.min.js"></script>
  <script>
    (function($) {
      $('.parallax').parallaxBackground();
    })(jQuery);
  </script>
  <script src="js/tabs/js/responsive-tabs.min.js"></script>
  <script src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
  <script src="js/cubeportfolio/main-mosaic3-cols3.js"></script>
  <script src="js/owl-carousel/owl.carousel.js"></script>
  <script src="js/owl-carousel/custom.js"></script>
  <script src="js/owl-carousel/owl.carousel.js"></script>
  <script src="js/accordion/js/smk-accordion.js"></script>
  <script src="js/accordion/js/custom.js"></script>
  <script src="js/progress-circle/raphael-min.js"></script>
  <script src="js/progress-circle/custom.js"></script>
  <script src="js/progress-circle/jQuery.circleProgressBar.js"></script>
  <script src="js/functions/functions.js"></script>
</body>

</html>