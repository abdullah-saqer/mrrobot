<!--profilePage-->
<?php
//require("functions/connect.php");
require("functions/engine.php");
if(!isset($_COOKIE['platinumMallCookie']))
  header('location:login.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/profile.css">
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
 crossorigin="anonymous"></script><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript/profile.js"></script>
<title>Profile</title>

</head>
<body id="profile" class="noselect">
<header>
<?php printNavBar();?>	
</header>
<div class="container">
<ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#" id="current-tab">Information</a></li>
      </ul>
           <div class="message_area" style="display:none;"><p id="message"></p></div>

	<div class="row" id="content">
		<div class="col-xs-12">
			<ul class="tab">
  <li><a href="javascript:void(0)"  class="tablinks" onclick="openTab(event, 'information')"><span><i class="fa fa-info"></i> </span><span class="hidden-xs hidden-sm hidden-md">Information</span></a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'orders')"><span><i class="fa fa-shopping-cart"></i> </span><span class="hidden-xs hidden-sm hidden-md">My orders</span></a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'history')"><span><i class="fa fa-history"></i> </span><span class="hidden-xs hidden-sm hidden-md">Orders History</span></a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'wishlist')"><span><i class="fa fa-heart"></i> </span><span class="hidden-xs hidden-sm hidden-md">My Wishlist</span></a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'setting')"><span><i class="fa fa-cog"></i> </span>
  <span class="hidden-xs hidden-sm hidden-md">Settings</span></a></li>
</ul>

<!-- start info div-->
<div id="information" class="tabcontent ">
  
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">Personal Details</a>
			</h4>
		</div>
		<div id="panel1" class="panel-collapse collapse">
			<div class="panel-body">
                <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                <p class="col-sm-10 " id="fname"></p>
          
          
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <p class="col-sm-10 " id="lname"></p>
          
          
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <p class="col-sm-10 " id="email"></p>
          
      
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <p class="col-sm-10 " id="tel"></p>
          </div> 
			</div>
		</div>
    </div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">Address</a>
			</h4>
		</div>
		<div id="panel2" class="panel-collapse collapse">
			<div class="panel-body">
                <label class="col-sm-2 control-label" for="input-firstname">Address 1</label>
                <p class="col-sm-10 " id="add1"></p>
          
          
            <label class="col-sm-2 control-label" for="input-lastname">Address 2</label>
            <p class="col-sm-10 " id="add2"></p>
            <label class="col-sm-2 control-label" for="input-lastname">City</label>
            <p class="col-sm-10 " id="city"></p>
			</div>
		</div>
    </div>
	
</div>
</div>
<!-- end info div-->
<!-- start order div-->
<div id="orders" class="tabcontent container">
  <div class="container">
  <div class="row">

<div id="order-details" class="col-sm-6 col-sm-offset-3">
<table id="orders-table" class="table table-bordered table-hover table-responsive">
<h4>Order Details</h4>
      <thead>
          <tr>
              <th class="">Order ID</th>
              <th class="">Status</th>
              <th class="">Total</th>
          </tr>
          </thead>
         
                      </table>
</div>

</div>
</div>

</div>
<!--end order div -->
<!--start history div -->
<div id="history" class="tabcontent">
  <div class=row>

<div id="history-details" class="col-sm-6 col-sm-offset-3">
<table id="history-table" class="table table-bordered table-hover table-responsive">
<h4>Order History</h4>
          <thead>
          <tr>
              <th class="">Order ID</th>
              <th class="">Delivery Date</th>
              <th class="">Total</th>
          </tr>
          </thead>

                      </table>
</div>

</div>
</div>

<!--end history div-->
<!-- start wishlist div-->
<div id="wishlist" class="tabcontent">
  <div class="row">
  <div id="wishlist-content" class="col-sm-6 col-sm-offset-3">
<table id="wishlist-table" class="table table-bordered  table-responsive">
  <h4>My Wishlist</h4>
  <thead>
  <tr>
          
              <th>Item ID</th>
              <th>Name</th>
              <th>Price</th>
              <th id="action-btn">Action</th>
           
        
          </tr>
             </thead>
      
          

  </table>
  <div class="col-sm-6 col-sm-offset-3" style="display: inline-block;">
  <label ><i class="fa fa-circle discount-icon" aria-hidden="true"></i> Discount Available</label>
  <label><i class="fa fa-circle out-of-stock-icon" aria-hidden="true"></i> Out Of Stock</label>
  </div>
  </div>

  </div>
 
  
</div>
<!--end wishlist div-->
<!--start setting div-->
<div id="setting" class="tabcontent">
<div class="row">
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">Change Personal Details</a>
      </h4>
    </div>
    <div id="panel3" class="panel-collapse collapse ">
      <div class="panel-body ">
      <div class="row">
      <div  class="form-horizontal">
        
          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-5">
              <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-5">
              <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-5">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-5">
              <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
                          </div>
          </div>
          <div class="buttons">
          <div class="pull-right">
            <input id="change-personal" type="submit" value="Update" class="btn btn-primary" />
          </div>
        </div>
                
                  </div>
                  </div>
                  
        
     
      </div>
    </div>
    </div>

    
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel4">Change Address</a>
      </h4>
    </div>
    <div id="panel4" class="panel-collapse collapse">
      <div class="panel-body">
               <div class="row">
      <div  class="form-horizontal">
      <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
            <div class="col-sm-5">
              <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control" />
                          </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
            <div class="col-sm-5">
              <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control" />
            </div>
          </div>
          <div class="form-group">
           <label class="col-sm-2 control-label">City</label>
            <div class="col-sm-5">
              <select name="city_id" id="input-city" class="form-control">
                      <option value=""> --- Please Select --- </option>
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
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" id="change-address" value="Update" class="btn btn-primary" />
          </div>
        </div>
          </div>
          </div>
                
      </div>
        </div>
        </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel5">Change password</a>
      </h4>
    </div>
    <div id="panel5" class="panel-collapse collapse">
      <div class="panel-body">
                 <div class="row">
      <div class="form-horizontal">
      <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Old Password</label>
            <div class="col-sm-5">
              <input type="password" name="password" value="" placeholder="Password" id="input-old-password" class="form-control" />
                          </div>
          </div>
    <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">New Password</label>
            <div class="col-sm-5">
              <input type="password" name="password" value="" placeholder="Password" id="input-new-password" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-5">
              <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
                          </div>
          </div>
        
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" id="change-password" value="Update" class="btn btn-primary" />
          </div>
        </div>
          </div>
          </div>
      </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel6">Newsletter
</a>
      </h4>
    </div>
    <div id="panel6" class="panel-collapse collapse">
      <div class="panel-body">
           <div class="row">
      <div class="form-horizontal">
      <div class="form-group">
            <label class="col-sm-2 control-label">Subscribe</label>
            <div class="col-sm-5">
                            <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" checked="checked"/>
                Yes</label>
              <label class="radio-inline">
                <input type="radio" name="newsletter" value="0"  />
                No</label>
            </div>
            </div>
        
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Update" class="btn btn-primary" />
          </div>
        </div>
          </div>
          </div>
      </div>
    </div>
    </div>
  

</div>
</div>
<!--end setting div-->
    
    
 

</div>
</div>
</div>


<?php printfooter();?>

</body>
</html>

