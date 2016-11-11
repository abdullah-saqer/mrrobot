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
<div id="content" class="noselect">
<div class="row" ">
	    <div id="login-div" class="col-sm-8" ">   
         
          <h3>Signin to your Account</h3>
	<hr>
	<form action="#" method="post"  class="form-horizontal">
        <fieldset id="login">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-username">Username:</label>
            <div class="col-sm-6" >
              <input type="text" name="username" value="" id="input-username" class="form-control"  />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password:</label>
            <div class="col-sm-6" >
              <input type="password"  name="password" value=""  id="input-password" class="form-control" />
                          </div>
          </div>
          </fieldset>
          <div class="form-group ">
          <p class="col-sm-6 col-sm-offset-3" >error message will display here</p>
          <a href="#" class="col-sm-4 col-sm-offset-1" >forgot your password</a>
          <input type="submit" value="Continue" class="btn btn-primary col-sm-3 col-sm-offset-1"  />
          </div>
	
	</form>
	</div>

	<div id="reg-div" class="col-sm-4">
	
	<h3>Register</h3>
	<hr>
	<div class="col-sm-12">
	<P>create one account for MRROBOT e-Mall and use it in multible store with one shoping cart and one check-out process</P>

	</div>
	<div class="col-sm-12">
	<button  id="reg-btn"  class="btn btn-primary col-sm-3 col-sm-offset-2" >Register</button>
          
	</div>



		</div>
	
	
	
	
	
	
	</div>
	</div>
	</div>







<?php printfooter();?>

</body>
</html>
