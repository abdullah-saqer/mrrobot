<?php
//require("functions/connect.php");
require("functions/engine.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" tpe="text/css"  href="css/footer.css">
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width , initial-scale=1.0" />
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<title>Login</title>
</head>
<body id="common-home">
<header>
<div id="topnav">
<?php printNavBar();?>
</div>
</header>


<div class="container">

<div class="row" style="background-color: red;">
	    <div id="" class="col-sm-8" style="background-color: blue;">   
         
          <h4>Signin to your Account</h4>
	<hr>
	<form action="#" method="post"  class="form-horizontal">
        <fieldset id="login">
          <div class="form-group required">
            <label class="col-sm-4 control-label" style="background-color: black;" for="input-username">Username:</label>
            <div class="col-sm-8" style="background-color: pink;">
              <input type="text" name="username" value="" id="input-username" class="form-control"  />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-4 control-label" style="background-color: purple;" for="input-password">password:&naps; </label>
            <div class="col-sm-8" style="background-color: brown;">
              <input type="password"  name="password" value=""  id="input-password" class="form-control" />
                          </div>
          </div>
          </fieldset>
          <div class="form-group ">
          <a href="#" class="col-sm-6" style="background-color:green;">forgot your password</a>
          <input type="submit" value="Continue" class="btn btn-primary col-sm-6" style="background-color: red;" />
          </div>
	
	</form>
	</div>

	<div id="content2" class="col-sm-4">
	
	<h4>register</h4>

		</div>
	
	
	
	
	
	
	</div>
	</div>





<div class="container" id="fix-footer">
<?php printfooter();?>
</div>
</body>
</html>
