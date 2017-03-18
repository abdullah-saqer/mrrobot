<?php
    require("functions/engine.php");
    init_guest();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="javascript/hovermenu/bootstrap-hover-dropdown.min.js"></script>

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

    <script src="javascript/navbar.js" type="text/javascript"></script>

    <link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!--slider-->
    <script src="javascript/slider.js" type="text/javascript"></script>
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">

    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <!--slider-->
    <!--zoom-in-->
    <script src="javascript/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <title>MR Robot</title>
</head>
<body id="home">

<?php printNavBar(); ?>
<div class="container"><!--index page start from here-->
    <div id="banner-add">

    </div>


    <header>
        <!--<a href="#" id="back-to-top" title="Back to top">&uarr;</a>-->
        <div class="scroll_to_top" style="display: block;">
        <span id="up_arrow" class="glyphicon glyphicon-menu-up">
      </span></div>

        <div class="row">
            <div class="col-sm-4">
                <div id="logo">
                    <a href="#common-home"><img id="zoom01" src="images/mrrobotLogo.svg" title="Your Store"
                                                alt="MR ROBOT" class="img-responsive"
                                                data-zoom-image="images/items/macbook_air.jpg"></a>
                </div>
            </div>
            <div class="col-sm-5">
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
                    <span class="input-group-btn">
   		 <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
 		 </span>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" data-toggle="dropdown"
                            class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i>
                        <span id="cart-total">0 item(s) - $0.00</span></button>
                    <ul class="dropdown-menu pull-right">
                        <?php viewcart(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--button-->
        <div id="fix">
            <ul class="nav nav-stacked">
                <li data-hover="dropdown">
                    <div class="btn-group"><a class="btn btn-primary dropdown-toggle  " data-hover="dropdown"
                                              data-toggle="dropdown" href="#">
                            shop By Category
                        </a>

                        <ul class="dropdown-menu " id="cat" data-hover="dropdown">
                            <ul class="list-inline ">

                                <li id="Laptop" class="dropdown-submenu" data-hover="dropdown">
                                    <a tabindex="-1" href="view_items.php">View All Items</a>
                                </li>
                                <li id="Laptop" class="dropdown-submenu" data-hover="dropdown">
                                    <a href="#">Laptop</a>
                                    <ul class="dropdown-menu">
                                        <li></li>
                                        <li><a href="#">HP</a></li>
                                        <li><a href="#">Toshiba</a></li>
                                    </ul>
                                </li>
                                <!--test-->

                                <li id="Mobile" class="dropdown-submenu">
                                    <a href="#">Mobile</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="gg">Apple</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">LG</a></li>
                                    </ul>
                                </li>
                                <li id="Desktop" class="dropdown-submenu">
                                    <a href="#">Desktop</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="samer">HP</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">ASUS</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </ul>

                    </div>
                </li>
                <!--shop by store-->


            </ul>
        </div>
        <!--button-->

        <hr>
    </header>
</div>
<div class="container">
    <div class="row" id="page-content">
        <div id="content" class="col-sm-12">
            <div id="slideshow0" class="owl-carousel" style="opacity: 1;">
                <div class="item">
                    <a href="#"><img src="images/slider/iPhone6-1140x380.jpg" alt="iPhone 6"
                                     class="img-responsive"/></a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/slider/macbook-pro-1140x380.jpg" alt="MacBookAir"
                                     class="img-responsive"/></a>
                </div>
                <div class="item"><a href="#">
                        <img src="images/slider/sm s7-1140x380.jpg" alt="samsung" class="img-responsive"/></a>
                </div>
            </div>
        </div>
    </div>
    <h3>Featured</h3>
    <div class="row">
        <div id="slideshow1" class="owl-carousel" style="opacity: 1;">
            <?php PrintLastestItems(10, 1); ?>
        </div>
    </div>
    <h3>MOST VIEWED</h3>
    <div class="row">
        <div id="slideshow2" class="owl-carousel" style="opacity: 1;">
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
            <div class="item"><?php printItem(); ?></div>
        </div>
    </div>
</div>
<?php printfooter(); ?>
</body>
</html>