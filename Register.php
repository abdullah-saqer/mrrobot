<?php
//require("functions/connect.ph");
require("functions/engine.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/register.css">
<script src="https://code.jquery.com/jquery-2.2.4.js"
			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			  crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width ,inital-scale=1.0" />
<link href="images/cart.png" rel="icon" />
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">
<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src='https://www.google.com/recaptcha/api.js'></script>

	<title>Registration</title>
</head>
<body>
<?php printNavBar(); ?>
<div class="container">
<ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Register</a></li>
      </ul>

<div class="row">         
       <div id="content" class="col-sm-9">      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <a href="/mrrobot/login.php">login page</a>.</p>
      <form action="#" method="post"  class="form-horizontal">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-10">
              <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
                          </div>
          </div>
      
                  </fieldset>
        <fieldset id="address">
          <legend>Your Address</legend>
  
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
            <div class="col-sm-10">
              <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control" />
                          </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
            <div class="col-sm-10">
              <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control" />
            </div>
          </div>
          
         
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-city">City</label>
            <div class="col-sm-10">
              <select name="city_id" id="input-city" class="form-control">
                      <option value=""> --- Please Select --- </option>
                      <option value="1">Ajloon</option>
                      <option value="2">Amman</option>
                      <option value="3">Aqaba</option>
                      <option value="4">Balqa</option>
                      <option value="5">Irbid</option>
                      <option value="6">Jerash</option>
                      <option value="7">Karak</option>
                      <option value="8">Ma'An</option>
                      <option value="9">Madaba</option>
                      <option value="10">Mafraq</option>
                      <option value="11">Tafileh</option>
                      <option value="12">Zarqa</option>
              </select>
            </div>
          </div>
         
        </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
                          </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Newsletter</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label">Subscribe</label>
            <div class="col-sm-5">
                            <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" />
                Yes</label>
              <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" checked="checked" />
                No</label>
                          </div>
            <div class="col-sm-5">
             
             <div class="g-recaptcha" data-sitekey="6LeVSQsUAAAAABthF5mD0cPXm51AYiN5AINq5Gva"></div>


            </div>
          </div>
        </fieldset>
                        <div class="buttons">
          <div class="pull-right">I have read and agree to the <a href="/Mrrobot/privacypolicy.htm" target="_blank" class="agree"><b>Privacy Policy</b></a>                        <input type="checkbox" name="agree" value="1" />
                        &nbsp;
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
</div>
</div>
<?php printfooter();?>
</body>
</html>