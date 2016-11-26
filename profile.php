<!--profilePage-->
<?php
//require("functions/connect.php");
require("functions/engine.php");

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
	<div class="row" id="content">
		<div class="col-xs-12">
			<ul class="tab">
  <li><a href="javascript:void(0)" id="defaultOpen" class="tablinks" onclick="openTab(event, 'information')"><span><i class="fa fa-info"></i> </span><span class="hidden-xs hidden-sm hidden-md">Information</span></a></li>
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
                Contents panel 1
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
                Contents panel 2
			</div>
		</div>
    </div>
	
</div>
</div>
<!-- end info div-->
<!-- start order div-->
<div id="orders" class="tabcontent">
  <div class=row >

<div id="order-details" class="col-sm-6 col-sm-offset-3">
<table class="table table-bordered table-hover table-responsive">
<h4>Order Details</h4>
          <tr>
              <th class="">Order ID</th>
              <th class="">Status</th>
              <th class="">Total</th>
          </tr>
          <tr class="header expand">
            <td class="text-center">15567</td>
                <td class="text-center">Received</td>
                <td class="text-center">600 JD<span class="sign"></span></td>
         </tr>
         <!--orderd items-->
         <tr style="display: none;">
         <td colspan="3" id="itemstable" >
         <table class="table table-bordered" id="inner-table"  >
         <tr>

              <th>Item ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
            <tr>
            <td >1</td>
                <td >Iphone 7 64GB</td>
                <td >Apple</td>
                <td>2</td>
                <td>600JD</td>

          </tr>
          <tr>
              <td >2</td>
                <td >Samsung S7</td>
                <td >Samsung</td>
                <td>1</td>
                <td>500JD</td>
          </tr>
          </table>
          </td>
          </tr>
          <tr class="header expand">
            <td class="text-center">15569</td>
                <td class="text-center">On Delivery</td>
                <td class="text-center">700 JD<span class="sign"></span></td>
                <span class="sign"></span>
         </tr>
         <tr style="display: none;">
         <td colspan="3" id="itemstable">
         <table class="table table-bordered" id="inner-table" >
         <tr>

              <th>Item ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
            <tr>
            <td >1</td>
                <td >Iphone 7 64GB</td>
                <td >Apple</td>
                <td>2</td>
                <td>600JD</td>

          </tr>
          <tr>
              <td >2</td>
                <td >Samsung S7</td>
                <td >Samsung</td>
                <td>1</td>
                <td>500JD</td>
          </tr>
          </table>
          </td>
          </tr>
                      </table>
</div>

</div>

</div>
<!--end order div -->
<!--start history div -->
<div id="history" class="tabcontent">
  <div class=row>

<div id="order-details" class="col-sm-6 col-sm-offset-3">
<table class="table table-bordered table-hover table-responsive">
<h4>Order History</h4>
          <tr>
              <th class="">Order ID</th>
              <th class="">Delivery Date</th>
              <th class="">Total</th>
          </tr>
          <tr class="header expand">
            <td class="text-center">15567</td>
                <td class="text-center">11-May-2016</td>
                <td class="text-center">600 JD <span class="sign"></span></td>
         </tr>
         <tr style="display: none;">
         <td colspan="3" id="itemstable">
         <table class="table table-bordered" id="inner-table">
         <tr>
              <th>Item ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          <tr>
            <td >1</td>
                <td >Iphone 7 64GB</td>
                <td >Apple</td>
                <td>2</td>
                <td>600JD</td>

          </tr>
          <tr>
              <td >2</td>
                <td >Samsung S7</td>
                <td >Samsung</td>
                <td>1</td>
                <td>500JD</td>
          </tr>
         
           
         </table>
         </td>
         </tr>
          <tr class="header expand">
            <td class="text-center">15569</td>
                <td class="text-center">19-Dec-2016</td>
                <td class="text-center">700 JD <span class="sign"></span></td>
         </tr>
          <tr style="display: none;">
         <td colspan="3" id="itemstable">
         <table class="table table-bordered" id="inner-table">
         <tr>
              <th>Item ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          <tr>
            <td >1</td>
                <td >Iphone 7 64GB</td>
                <td >Apple</td>
                <td>2</td>
                <td>600JD</td>

          </tr>
          <tr>
              <td >2</td>
                <td >Samsung S7</td>
                <td >Samsung</td>
                <td>1</td>
                <td>500JD</td>
          </tr>
         
           
         </table>
         </td>
         </tr>
                      </table>
</div>

</div>
</div>

<!--end history div-->
<!-- start wishlist div-->
<div id="wishlist" class="tabcontent">
  <div class="row">
  <div id="wishlist" class="col-sm-6 col-sm-offset-3">
<table class="table table-bordered  table-responsive">
  <h4>My Wishlist</h4>
  <tr>
    
              <th>Item ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Price</th>
              <th id="action-btn">Action</th>
        
          </tr>
           <tr  class="discount">
            <td >1</td>
                <td >Iphone 7 64GB</td>
                <td >Apple</td>
                <td>600JD</td>
                <td id="action-btn"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>

          </tr>
          <tr class="out-of-stock">
              <td >2</td>
                <td >Samsung S7</td>
                <td >Samsung</td>
                <td>500JD</td>
                <td id="action-btn"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
          </tr>
          <tr>
              <td >2</td>
                <td >Samsung Note 5</td>
                <td >Samsung</td>
                <td>550JD</td>
                <td id="action-btn"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
          </tr>
         

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
 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">Change Personal Details</a>
      </h4>
    </div>
    <div id="panel3" class="panel-collapse collapse ">
      <div class="panel-body ">
      <div class="row">
      <form action="#" method="post"  class="form-horizontal">
        
          
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
            <input type="submit" value="Update" class="btn btn-primary" />
          </div>
        </div>
                
                  </form>
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
      <form action="#" method="post"  class="form-horizontal">
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
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Update" class="btn btn-primary" />
          </div>
        </div>
          </form>
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
      <form action="#" method="post"  class="form-horizontal">
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
            <input type="submit" value="Update" class="btn btn-primary" />
          </div>
        </div>
          </form>
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
      <form action="#" method="post"  class="form-horizontal">
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
          </form>
          </div>
      </div>
    </div>
    </div>
  
</div>
</div>

		</div>
	</div>
</div>


<?php printfooter();?>

</body>
</html>
