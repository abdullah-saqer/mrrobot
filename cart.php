<?php
    require("functions/engine.php");
    init_guest();
    if (!isset($_COOKIE['platinumMallCookie']))
        header('location:login.php');
?>
<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" tpe="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/cart.css">

        <script src="https://code.jquery.com/jquery-2.2.4.js"
                integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

        <link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/cart.js" type="text/javascript"></script>

        <title>Shopping cart</title>
    </head>
    <body id="cart">
    <div id="topnav">
        <?php printnavbar(); ?>
    </div>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
            <li><a href="/mrrobot/cart.php">Shopping Cart</a></li>
        </ul>
    </div>

    <div class="container">
        <div id="content" class="col-sm-12"><h1>Shopping Cart</h1>

            <div class="table-responsive">
                <table class="table table-bordered" id="cart-table">
                    <thead>
                    <tr>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Discount</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>

                    <?php
                        printCartItems();
                    ?>


                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="view_items.php" class="btn btn-default" id="continue-shoping">Continue
                                Shopping</a></div>
                        <div class="pull-right"><a href="checkout.php" class="btn btn-primary"
                                                   id="check-out">Checkout</a></div>
                    </div>
            </div>
        </div>

    </body>
    <?php printfooter(); ?>

    </html>
