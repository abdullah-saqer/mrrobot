<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Platium E-mall" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/checkout.css" rel='stylesheet' type='text/css' />	
<script src="https://code.jquery.com/jquery-2.2.4.js"
			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			  crossorigin="anonymous"></script>
			  <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
 <script src="js/scripts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/checkout.js"></script>
<link href="js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/cart.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<title>Check Out</title>
<body id="cart">
  <div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="/mrrobot/index.php">help</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h6><span></span> Call us : 06 1234567</h6>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="root.php"><h1><img class='logo-img' src='images/logo.png'>latinum <span>Emall</span></h1> </a>
		  </div>
		
		<div class="clearfix"></div>	
	    </div>
	    </div>
	     <ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="root.php">Home</a></li>
			</ul>

	    </div>
	    </div>
	    <div class="container">
	    	<h1>Checkout</h1>
 
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">
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
$('input[name=\'delivery_address\']').on('change', function() {
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
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">Step 2: Payment method <i class="fa fa-caret-down" aria-hidden="true"></i></a>
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
            <input type="radio" name="payment_method" value="cc" >
       			 Credit Card</label>
				</div>
		<div id="payment-cc" style="display: none">
    <div class="form-group required">
      <label class="col-sm-2 control-label" >Name on Card</label>
      <div class="col-sm-10">
        <input type="text"  value="" placeholder="Enter your name as it appears on the card" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" >Card Number</label>
      <div class="col-sm-10">
        <input type="text" name="address_2" value="" placeholder="Enter your 16 digits credit card number" id="input-delivery-address-2" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" >Card Information</label>
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
        <input type="text"  value="" placeholder="CCV" id="input-ccv" class="form-control">
      </div>
    </div>
      </div>
          <script type="text/javascript"><!--
$('input[name=\'payment_method\']').on('change', function() {
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
                <a tabindex="-1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">Step 3: Confirm Order <i class="fa fa-caret-down" aria-hidden="true"></i></a>
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
    <Button id="button-confirm" data-loading-text="Loading..." class="btn btn-primary" >Confirm Order</Button>
  </div>

</div>
</div>
</div>


	
</div>
</div>

<!--start-smooth-scrolling-->
            <script type="text/javascript">
                  $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>


    <!--start-footer-->
       <div class="footer">
       <div class="container">
      <div class="footer-top">
        <div class="col-md-2 col-md-offset-2 footer-left">
          <h3>Information</h3>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Delivery Information</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
                       
          </ul>
        </div>
        <div class="col-md-4 footer-left">
          <h3>My account</h3>
          <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Settings</a></li>
                               
          </ul>
        </div>
        <div class="col-md-4 footer-left lost">
          <h3>Custumer Service</h3>
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">CRM</a></li>           
          </ul>
        </div>
        
        <div class="clearfix"> </div>
      </div>
        
    </div>
  </div>
  <ul class="socials">
            <li><a class="soc1" href="#"></a></li>
            <li><a class="soc2" href="#"></a></li>
            <li><a class="soc3" href="#"></a></li>
        </ul>
        <!--/start-copyright-->
   <div class="copy">
    <div class="container">
      <p>&copy; 2017 Platinum E-mall. All Rights Reserved </p>
    </div>
  </div>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>

