<?php
session_start();
if (isset($_SESSION['user'])) {
    include '../controller/connection.php';
    $id_ = $_SESSION['user'];
    $exe = $con->query("SELECT * FROM users WHERE id = '$id_'");

    $row_ = $exe->fetch_assoc();
    $id = $row_['id'];
    $name = $row_['name'];
    $email = $row_['email'];
    $phone = $row_['phone'];
    $address = $row_['address'];
    $secret = $row_['secret'];

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My profile</title>
        <meta name="keywords" content="themeforest template" />
        <meta name="description" content="best responsive html template in themeforest">
        <meta name="author" content="codelayers">

        <!-- Mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../images/fav-icon.ico">
        <link rel="stylesheet" href="../js/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Google fonts  -->

        <link href="https://fonts.googleapis/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
        <link href="https://fonts.googleapis/css?family=Yesteryear" rel="stylesheet">
        <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Template's stylesheets -->
        <link rel="stylesheet" href="../js/megamenu/stylesheets/screen.css">
        <link rel="stylesheet" href="../css/theme-default.css" type="text/css">
        <link rel="stylesheet" href="../js/loaders/stylesheets/screen.css">
        <link rel="stylesheet" href="../css/shortcodes.css" type="text/css">
        <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="../fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
        <link rel="stylesheet" href="../fonts/et-line-font/et-line-font.css">
        <link href="../js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../plugins/sweetAlert/sweetAlert.css">
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
                    <div class="header-section style1 noborder no-bg fn-mar pin-style">
                        <div class="container">
                            <div class="mod-menu">
                                <div class="row">
                                    <div class="col-sm-2"> <a href="../index.html" title="" class="logo mar-4"> <img src="../images/logo/logo.png" alt=""> </a> </div>
                                    <div class="col-sm-10">
                                        <div class="main-nav">
                                            <ul class="nav navbar-nav top-nav">
                                                <li class="visible-xs menu-icon"> <a href="../javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                            </ul>
                                            <div id="menu" class="collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="mega-menu"> <a href="../">Home</a> <span class="arrow"></span></li>
                                                    <li class="mega-menu"> <a href="../shop.php">Products</a> <span class="arrow"></span></li>
                                                    <li class="mega-menu"> <a href="../contact.php">Contact Us</a> <span class="arrow"></span></li>
                                                    <li class="mega-menu active"> <a href="#">Profile</a> <span class="arrow"></span></li>
                                                    <li class="mega-menu"> <a href="../controller/login.close.php">Log out</a> <span class="arrow"></span></li>
                                                    <li class="right"> <a href="#"> <i aria-hidden="true" class="fa fa-globe"></i> Language </a> <span class="arrow"></span>
                                                    <ul>
                                                        <li> <a href="index.php">Spanish</a> </li>
                                                        <li> <a href="index.english.php">English</a> </li>
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
                    <!--end menu-->
                </div>
                <!--end menu-->
                <div class="clearfix"></div>
                <div class="header-inner-tmargin">
                    <section class="section-side-image clearfix">
                        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
                            <div class="background-imgholder" style="background:url(../images/img2.jpeg);"><img class="nodisplay-image" src="../images/header-inner-1.jpg" alt="" /> </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                                    <div class="header-inner" style="height: 300px;">
                                        <div class="overlay">
                                            <div class="text text-center">
                                                <h3 class="uppercase text-white less-mar-1 title">My Profile</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class=" clearfix"></div>
                    <!--end section-->
                </div>
                <div class="clearfix"></div>
                <!--end header inner-->
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <section class="section-light">
                    <div class="container">
                        <div class="row sec-padding hl-more-top-padd">
                            <div class="col-md-12 text-center">
                                <h3 class="uppercase less-mar-1 font-weight-5 raleway">Menu</h3>
                            </div>
                            <div class="col-md-12">
                                <!-- <div class=""> -->
                                <div class="tab-navbar-main tabstyle-12">
                                    <ul class="responsive-tabs">
                                        <li><a href="#example-1-tab-1" target="_self"><span class="icon-home"></span> <br />
                                                Home</a></li>
                                        <li><a href="#example-1-tab-2" target="_self"><span class="icon-briefcase"></span> <br />
                                                My data</a></li>
                                        <li><a href="#example-1-tab-3" target="_self"><span class="icon-layers"></span> <br />
                                                Update password</a></li>
                                        <li><a href="#example-1-tab-4" target="_self"><span class="icon-users"></span> <br />
                                                Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tab-content-holder-9">
                                <div class="responsive-tabs-content">
                                    <div id="example-1-tab-1" class="responsive-tabs-panel">

                                        <h1 style="text-align: center;">Welcome, <?php echo $name ?></h1>
                                        <!--end item-->
                                    </div>
                                    <!--end panel 1-->
                                    <div id="example-1-tab-2" class="responsive-tabs-panel col-xs-12">
                                        <section class="sec-padding ">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="col-md-9 ">
                                                        <h4 class="uppercase">Update data</h4>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-body bg-white enter-block ">
                                                        <form id="data_updateUser">
                                                            <div class="row ">
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="name"> Name</label>
                                                                    <input id="name" class="input-1" type="text" placeholder="" value="<?php echo $name ?>" name="name">
                                                                    <input id="name" style="display: none;" class="input-1" type="text" placeholder="" value="<?php echo $id ?>" name="id">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="email"> Email</label>
                                                                    <input id="email" class="input-1" type="text" value="<?php echo $email ?>" name="email">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="email"> Phone</label>
                                                                    <input id="email" class="input-1" type="text" value="<?php echo $phone ?>" name="phone">

                                                                </div>
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="email"> Address</label>
                                                                    <input id="email" class="input-1" type="text" value="<?php echo $address ?>" name="address">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <br />
                                                                <div class="col-md-9 text-center">
                                                                    <button id="btn_updateUser" class="btn btn-gyellow btn-fullwidth uppercase" type="submit"><i class="fa fa-save"></i>Send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!--end form body-->
                                                </div>
                                            </div>
                                        </section>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!--end panel 2-->
                                    <div id="example-1-tab-3" class="responsive-tabs-panel ">
                                        <section class="sec-padding ">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="col-md-9 ">
                                                        <h4 class="uppercase">Update Password</h4>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-body bg-white enter-block ">
                                                        <form id="data_updateSecret">
                                                            <div class="row ">
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="name"> Last password</label>
                                                                    <input id="name" style="display: none;" class="input-1" type="text" placeholder="" value="<?php echo $id ?>" name="id">
                                                                    <input id="name" class="input-1" type="password" placeholder="" name="last">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="email"> New password</label>
                                                                    <input id="email" class="input-1" type="password" name="new">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <label class="lable-text" for="email"> Confirm</label>
                                                                    <input id="email" class="input-1" type="password" name="comfirm">

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <br />
                                                                <div class="col-md-9 text-center">
                                                                    <button id="btn_updateSecret" class="btn btn-gyellow btn-fullwidth uppercase" type="submit"><i class="fa fa-save"></i>Send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </div>

                                    <div id="example-1-tab-4" class="responsive-tabs-panel">
                                        <div class="row">
                                            <div class="domain-pricing-table">
                                                <table class="table-style-2">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                            <th>State</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $exex = $con->query("SELECT * FROM `orders` WHERE `user_id`  = '$id' ORDER BY id DESC ");
                                                        while ($roww = $exex->fetch_assoc()) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $roww["id"] ?></td>
                                                                <td><?php echo $roww["product_name"] ?></td>
                                                                <td>$ <?php echo number_format($roww["product_price"]) ?></td>
                                                                <td>
                                                                    <?php
                                                                    $state =  $roww["state"];
                                                                    if ($state == 1) {
                                                                        echo "Empacando";
                                                                    } elseif ($state == 2) {
                                                                        echo "En camino";
                                                                    } elseif ($state == 3) {
                                                                        echo "Entregado";
                                                                    }
                                                                    ?>
                                                                </td>
                                                            </tr>

                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end panel 4-->


                                </div>
                                <!--end column-->

                            </div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
                <!-- end section -->

                <!-- end section -->


                <!-- end section -->

                <!-- end section -->

                <section class="sec-padding-6 section-medium-dark">
                    <div class="container">
                        <div class="row">
                            <div class="fo-copyright-holder text-center"> Moda Nice © 2020 | All rights reserved. </div>
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
        <script src="../js/jquery/jquery.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>

        <!-- Scripts END -->

        <!-- Template scripts -->
        <script src="../js/megamenu/js/main.js"></script>
        <script src="../js/tabs/js/responsive-tabs.min.js"></script>
        <script src="../js/jFlickrFeed/jflickrfeed.min.js"></script>
        <script>

        </script>

        <script src="../js/functions/functions.js"></script>
        <script src="../plugins/sweetAlert/sweetAlert.js"></script>
        <script src="js/update.user.js"></script>
        <script src="js/update.user.secret.js"></script>

    </body>

    </html>
<?php } else {
    header("location:../");
} ?>