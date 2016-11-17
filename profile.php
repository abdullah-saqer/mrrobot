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
<body id="profile">
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

<div id="order-details" class="col-sm-5">
<table class="table table-bordered table-hover table-responsive">
<h4>Order Details</h4>
          <tr>
              <th class="">Order ID</th>
              <th class="">Status</th>
              <th class="">Total</th>
          </tr>
          <tr>
            <td class="text-center">15567</td>
                <td class="text-center">Received</td>
                <td class="text-center">600 JD</td>
         </tr>
          <tr>
            <td class="text-center">15569</td>
                <td class="text-center">On Delivery</td>
                <td class="text-center">700 JD</td>
         </tr>
                      </table>
</div>
<div id="order-items" class="col-sm-6 col-sm-offset-1 ">

  <h4>Order Items</h4>
<div class="table-responsive">
<table class="table table-bordered ">

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
                      </div>

</div>
</div>

</div>
<!--end order div -->
<!--start history div -->
<div id="history" class="tabcontent">
  <div class=row>

<div id="order-details" class="col-sm-5">
<table class="table table-bordered table-hover table-responsive">
<h4>Order Details</h4>
          <tr>
              <th class="">Order ID</th>
              <th class="">Delivery Date</th>
              <th class="">Total</th>
          </tr>
          <tr>
            <td class="text-center">15567</td>
                <td class="text-center">11-May-2016</td>
                <td class="text-center">600 JD</td>
         </tr>
          <tr>
            <td class="text-center">15569</td>
                <td class="text-center">19-Dec-2016</td>
                <td class="text-center">700 JD</td>
         </tr>
                      </table>
</div>
<div id="order-items" class="col-sm-6 col-sm-offset-1 ">

  <h4>Order Items</h4>
<div class="table-responsive">
<table class="table table-bordered ">

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
                      </div>

</div>
</div>
</div>

<!--end history div-->
<!-- start wishlist div-->
<div id="wishlist" class="tabcontent">
  <h3>My Wishlist</h3>
  <p>table of items in wishlist</p>
</div>
<div id="setting" class="tabcontent">
  <h3>Settings</h3>
  <p>panel-collapse to change settings here</p>
</div>
<!--end wishlist div-->
		</div>
	</div>
</div>


<?php printfooter();?>

</body>
</html>
