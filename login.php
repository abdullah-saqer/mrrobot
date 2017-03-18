<?php
    //require("functions/connect.php");
    require("functions/engine.php");
    if (isset($_COOKIE['platinumMallCookie']))
        header("Location: /mrrobot/index.php");
    setcookie("platinumMallGuestCookie", "", time() - 86400 * 30, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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
    <title>Login</title>
    <script src="javascript/login.js" type="text/javascript"></script>
</head>
<body id="common-home">
<header>
    <div id="topnav">
        <?php printNavBar(); ?>
    </div>
</header>


<div class="container">
    <ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Login</a></li>
    </ul>

    <div id="content" class="noselect">

        <div class="row"
        ">
        <div id="login-div" class="col-sm-8"
        ">

        <h3>Sign in to your Account</h3>
        <hr>
        <div class="form-horizontal">
            <fieldset id="login">
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-username">Email:</label>
                    <div class="col-sm-6">
                        <input type="text" name="username" placeholder="Enter your email" value="" id="input-username"
                               class="form-control"/>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-password">Password:</label>
                    <div class="col-sm-6">
                        <div class="inner-addon right-addon">
                            <input type="password" name="password" value="" id="input-password" class="form-control"/>
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group ">
                <p class="col-sm-6 col-sm-offset-3" id="error-message"></p>
                <a href="#" class="col-sm-4 col-sm-offset-1">forgot your password?</a>

                <input type="submit" id="login_btn" value="Continue" class="btn btn-primary col-sm-3 col-sm-offset-0"/>

            </div>

        </div>
    </div>

    <div id="reg-div" class="col-sm-4">

        <h3>Register</h3>
        <hr>
        <div class="col-sm-12">
            <P>Create an account for MRrobot e-Mall and use it in multiple stores</P>

        </div>
        <div class="col-sm-12">
            <button id="reg-btn-reg" class="btn btn-success col-sm-3 col-sm-offset-1"
                    onclick="window.location.href='/mrrobot/Register.php'">Register
            </button>

        </div>
        <div class="col-sm-12">
            <p>Become a Merchant to sell products</p>
        </div>
        <div class="col-sm-12">
            <button id="reg-btn-mar" class="btn btn-info col-sm-3 col-sm-offset-1">Become A Merchant</button>

        </div>


    </div>

</div>
</div>

</div>
<?php printfooter(); ?>

</body>
</html>
