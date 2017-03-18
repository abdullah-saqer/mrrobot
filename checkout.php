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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Platium E-mall"/>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" tpe="text/css" href="css/footer.css">

        <script src="https://code.jquery.com/jquery-2.2.4.js"
                integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

        <link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="javascript/megamenu.js"></script>
        <script type="text/javascript" src="javascript/scripts.js"></script>
        <script type="text/javascript" src="javascript/move-top.js"></script>
        <script type="text/javascript" src="javascript/easing.js"></script>
        <script type="text/javascript" src="javascript/checkout.js"></script>

        <title>Checkout</title>
    </head>
    <body id="cart">
    <div id="topnav">
        <?php printnavbar(); ?>
    </div>

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
            <li><a href="/mrrobot/checkout.php">Checkout</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Checkout</h1>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                           href="#panel1">
                            Step 1: Delivery Details <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </h4>
                </div>
                <!--Delivery Details-->
                <div id="panel1" class="panel-collapse collapse">
                    <div class="panel-body"><div class="form-horizontal">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="delivery_address" value="existing" checked="checked">
                                    I want to use an existing address</label>
                            </div>
                            <div id="delivery-existing">
                                <select id="old-address" class="form-control">
                                    <option value="2" selected="selected">sdasd sadasd, sdsad, sdas, Berkshire, United Kingdom</option>
                                </select>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="delivery_address" value="new">
                                    I want to use a new address</label>
                            </div>
                            <div id="delivery-new" style="display: none">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" >Address 1</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address_1" value="" placeholder="Address 1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" >Address 2</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address_2" value="" placeholder="Address 2" id="input-delivery-address-2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" >City</label>
                                    <div class="col-sm-10">
                                        <select name="city_id" id="input-city" class=" mandatory form-control">
                                            <option value="0"> --- Please Select --- </option>
                                            <option value="Ajloon">Ajloon</option>
                                            <option value="Amman">Amman</option>
                                            <option value="Aqaba">Aqaba</option>
                                            <option value="Balqa">Balqa</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Jerash">Jerash</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Ma'An">Ma'An</option>
                                            <option value="Madaba">Madaba</option>
                                            <option value="Mafraq">Mafraq</option>
                                            <option value="Tafileh">Tafileh</option>
                                            <option value="Zarqa">Zarqa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--//Delivery Details-->
                </div>
            </div>
            <script type="text/javascript"><!--
                $('input[name=\'delivery_address\']').on('change', function () {
                    if (this.value == 'new') {
                        $('#delivery-existing').hide();
                        $('#delivery-new').show();
                    } else {
                        $('#delivery-existing').show();
                        $('#delivery-new').hide();
                    }
                });
                //--></script>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                           href="#panel2">Step 2: Payment method <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </h4>
                </div>
                <div id="panel2" class="panel-collapse collapse">
                    <div class="panel-body" id="delivery-panel">
                        <P>Please select the preferred payment method to use on this order.</P>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment_method" value="cod" checked="checked">
                                Cash On Delivery</label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="payment_method" value="cc">
                                Credit Card</label>
                        </div>
                        <div id="payment-cc" style="display: none">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label">Name on Card</label>
                                <div class="col-sm-10">
                                    <input type="text" value="" placeholder="Enter your name as it appears on the card"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Card Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address_2" value=""
                                           placeholder="Enter your 16 digits credit card number"
                                           id="input-delivery-address-2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label">Card Information</label>
                                <div class="col-sm-2">
                                    <select name="month" id="month" class=" mandatory form-control">
                                        <option value="#">Month</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>

                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="year" id="year" class=" mandatory form-control">
                                        <option value="#">Year</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>


                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" value="" placeholder="CCV" id="input-ccv" class="form-control">
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript"><!--
                            $('input[name=\'payment_method\']').on('change', function () {
                                if (this.value == 'cc') {
                                    $('#payment-cc').show();
                                } else {
                                    $('#payment-cc').hide();
                                }
                            });
                            //--></script>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                           href="#panel3">Step 3: Confirm Order <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </h4>
                </div>
                <div id="panel3" class="panel-collapse collapse">
                    <div class="panel-body" id="delivery-panel">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id='cart-table'>
                                <thead>
                                <tr>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Discount</td>
                                    <td class="text-right">Quantity</td>
                                    <td class="text-right">Unit Price</td>
                                    <td class="text-right">Total</td>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
                                    <td class="text-right" id='Sub-Total'></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Flat Shipping Rate:</strong></td>
                                    <td class="text-right" id='Shipping'></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                    <td class="text-right" id='total'></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="pull-right">
                            <Button id="button-confirm" data-loading-text="Loading..." class="btn btn-primary">Confirm
                                Order
                            </Button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    </body>
    <?php printfooter(); ?>

    </html>
