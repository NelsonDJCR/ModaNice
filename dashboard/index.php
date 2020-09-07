<?php
session_start();
if (isset($_SESSION['admin'])) {
    include '../controller/connection.php';


?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
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
        <link rel="stylesheet" href="css/modal.css">



    </head>



    <body>
     

        <div class="modalx" id="modalxx">
            <div class="beforex"></div>
            <div class="modal-contentx">
                <form id="form_updateProduct">
                    <div class="box-inputs">
                        <br>
                        <div class="xxxx" style="float: right; padding: 5px  15px; background: red; margin-top: -28px;">x</div>
                        <h3>Editar Producto</h3>
                        <input name="id" id="idModal" class="input" type="text" style="display: none;"><br>
                        <label for="">Nombre</label>
                        <input name="name" id="nameModal" class="input" type="text"><br>
                        <label for="Precio">Precio</label>
                        <input name="price" id="priceModal" class="input" type="text"><br>
                        <label for="">Tallas</label>
                        <input name="size" id="sizeModal" class="input" type="text"><br>
                        <input class="btn centerx" id="btn_updateProduct" type="submit" value="Acualizar datos">
                    </div>
                </form>
            </div>
        </div>


        <div class="modalx" id="modalxxx">
            <div class="beforex"></div>
            <div class="modal-contentx">
                <form id="form_updateUser">
                    <div class="box-inputs">
                        <br>
                        <div id="" class="xxxx" style="float: right; padding: 5px  15px; background: red; margin-top: -28px;">x</div>
                        <h3>Editar Usuario</h3>
                        <input name="id" id="id_userModal" class="input" type="text" style="display: none;"><br>
                        <label for="">Nombre</label>
                        <input name="name" id="name_userModal" class="input" type="text"><br>
                        <label for="">Correo</label>
                        <input name="email" id="email_userModal" class="input" type="text"><br>
                        <label for="Precio">Teléfono</label>
                        <input name="phone" id="phone_userModal" class="input" type="text"><br>
                        <label for="">Dirección</label>
                        <input name="address" id="address_userModal" class="input" type="text"><br>
                        <input class="btn centerx" id="btn_updateUser" type="submit" value="Acualizar datos">
                    </div>
                </form>
            </div>
        </div>
        <div class="modalx" id="modalxxxx">
            <div class="beforex"></div>
            <div class="modal-contentx">
                <form id="form_updateOrder">
                    <div class="box-inputs">
                        <br>
                        <div id="" class="xxxx" style="float: right; padding: 5px  15px; background: red; margin-top: -28px;">x</div>
                        <h3>Editar Usuario</h3>
                        <input name="id" id="id_orderModal" class="input" type="text" style="display: none;"><br>
                        <label for="">Estado</label>
                        <div class="select-box">

                        </div>
                        <input name="state" id="state_orderModal" class="input" type="text"><br>
                        <input class="btn centerx" id="btn_updateOrder" type="submit" value="Acualizar datos">
                    </div>
                </form>
            </div>
        </div>
        <!--end loading-->
        <div class="wrapper-boxed">
            <div class="site-wrapper">
                <div class="col-md-12 nopadding">
                    <div class="header-section style1 noborder no-bg fn-mar pin-style">
                        <div class="container">
                            <div class="mod-menu">
                                <div class="row">
                                    <div class="col-sm-2"> <a href="../index.html" title="" class="logo mar-4"> <img style="z-index: 2;" src="../images/logo/logo.png" alt=""> </a> </div>
                                    <div class="col-sm-10">
                                        <div class="main-nav">
                                            <ul class="nav navbar-nav top-nav">
                                                <li class="visible-xs menu-icon"> <a href="../javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                            </ul>
                                            <div id="menu" class="collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="mega-menu"> <a href="../controller/login.close.php" style="z-index: 2;">Cerrar Sesión</a> <span class="arrow"></span>
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
                            <div class="background-imgholder" style="background:url(../images/img.jpeg);"><img class="nodisplay-image" src="../images/header-inner-1.jpg" alt="" /> </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                                    <div class="header-inner" style="height: 300px;">
                                        <div class="overlay">
                                            <div class="text text-center">
                                                <h3 class="uppercase text-white less-mar-1 title">DASHBOARD</h3>
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
                                <div class="col-md-12 nopadding">
                                    <div class="tab-navbar-main tabstyle-9">
                                        <ul class="responsive-tabs">
                                            <li><a href="#example-1-tab-1" target="_self"><span class="icon-home"></span> <br />
                                                    Inicio</a></li>
                                            <li><a href="#example-1-tab-2" target="_self"><span class="icon-briefcase"></span> <br />
                                                    Agregar Producto</a></li>
                                            <li><a href="#example-1-tab-3" target="_self"><span class="icon-layers"></span> <br />
                                                    Lista de productos</a></li>
                                            <li><a href="#example-1-tab-4" target="_self"><span class="icon-users"></span> <br />
                                                    Lista de usuarios</a></li>
                                            <li><a href="#example-1-tab-5" target="_self"><span class="icon-briefcase"></span> <br />
                                                    Ordenes</a></li>
                                            <li><a href="#example-1-tab-6" target="_self"><span class="icon-envelope"></span> <br />
                                                    Mensajes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content-holder-9">
                                    <div class="responsive-tabs-content">
                                        <div id="example-1-tab-1" class="responsive-tabs-panel">

                                            <h1 style="text-align: center;">Bienvenido</h1>
                                            <!--end item-->
                                        </div>
                                        <!--end panel 1-->

                                        <div id="example-1-tab-2" class="responsive-tabs-panel col-xs-12">
                                            <section class="sec-padding ">
                                                <div class="container">
                                                    <div class="col-md-12">
                                                        <div class="col-md-9 ">
                                                            <h4 class="uppercase">Agregar Nuevo producto</h4>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="form-body bg-white enter-block ">
                                                            <form method="POST" action="controller/save.product.php" enctype="multipart/form-data" id="data_product">
                                                                <div class="row ">
                                                                    <div class="col-md-9">
                                                                        <label class="lable-text" for="name"> Nombre</label>
                                                                        <input id="name" class="input-1" type="text" placeholder="" name="name">
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <label class="lable-text" for="email"> Precio</label>
                                                                        <input id="email" class="input-1" type="text" name="price">
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <label class="lable-text" for="email"> Tallas</label>
                                                                        <input id="email" class="input-1" type="text" name="size">


                                                                    </div>
                                                                    <div class="col-md-9 ">

                                                                        <label class="lable-text" for="email"> Imagen</label>
                                                                        <input type="file" name="img" multiple=true>


                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <br />
                                                                    <div class="col-md-9 text-center">
                                                                        <button class="btn btn-gyellow btn-fullwidth uppercase" type="submit"><i class="fa fa-save"></i> Guardar Producto</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!--end form body-->
                                                    </div>
                                                    <!--end item-->

                                                    <!--end item-->

                                                </div>
                                            </section>
                                            <div class="clearfix"></div>

                                        </div>
                                        <!--end panel 2-->

                                        <div id="example-1-tab-3" class="responsive-tabs-panel ">
                                            <div class="row">
                                                <div class="domain-pricing-table">
                                                    <table class="table-style-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nombre</th>
                                                                <th>Precio</th>
                                                                <th>Talla</th>
                                                                <th colspan="2">Acctión</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_products">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end panel 3-->

                                        <div id="example-1-tab-4" class="responsive-tabs-panel">
                                            <div class="row">
                                                <div class="domain-pricing-table">
                                                    <table class="table-style-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nombre</th>
                                                                <th>Correo</th>
                                                                <th>Teléfono</th>
                                                                <th>Dirección</th>
                                                                <th colspan="2">Accción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_users">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end panel 4-->

                                        <div id="example-1-tab-5" class="responsive-tabs-panel">
                                            <div class="row">
                                                <div class="domain-pricing-table">
                                                    <table class="table-style-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>ID Usuario</th>
                                                                <th>ID Producto</th>
                                                                <th>Total</th>
                                                                <th>Estado</th>
                                                                <th colspan="2">Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_orders">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end panel 5-->

                                        <div id="example-1-tab-6" class="responsive-tabs-panel">
                                            <div class="row">
                                                <div class="domain-pricing-table">
                                                    <table class="table-style-2">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nombre</th>
                                                                <th>Correo</th>
                                                                <th>Teléfono</th>
                                                                <th>Asunto</th>
                                                                <th>Mensaje</th>
                                                                <th>Eiminar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_messages">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
        <script src="../js/jquery/jquery.js"></script>

        <script src="../js/bootstrap/bootstrap.min.js"></script>

        <!-- Scripts END -->

        <!-- Template scripts -->
        <script src="../js/megamenu/js/main.js"></script>
        <script src="../js/tabs/js/responsive-tabs.min.js"></script>
        <script src="../js/jFlickrFeed/jflickrfeed.min.js"></script>

        <script src="../js/functions/functions.js"></script>
        <script src="js/save.product.js"></script>
        <script src="js/main.js"></script>
        <script src="../plugins/sweetAlert/sweetAlert.js"></script>

    </body>

    </html>

<?php } else {
    header("location:../");
} ?>