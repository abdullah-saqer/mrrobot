<?php
session_start();
ob_start();
function printNavBar(){
  //this function to print navigation bar to web pages 
  echo'<nav id="top">
  <div class="container">
  <div id="top-links" class="nav pull-left">  
  <ul class="social list-inline">
                    <li ><a id="fb" href="#"><i class="fa fa-lg fa-facebook"></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    <li ><a id="tw" href="#"><i class="fa fa-lg fa-twitter"></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    <li><a id="go" href="#"><i class="fa fa-lg fa-google-plus"></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    
                </ul></div>
  <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href="#"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>
        <li class="dropdown"><a id="ua" href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/Mrrobot/register.php">Register</a></li>
            <li><a href="#">Login</a></li>
                      </ul>
        </li>
        <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a></li>
        <li><a href="#" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a></li>
        <li><a href="#" title="Checkout"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a></li>
      </ul>
    </div>
  </nav>';
}
function printfooter(){
echo'<footer>
<div class="container">
<div class="row">
<div class="col-sm-4">
<h5>Information</h5>
 <ul class="list-unstyled">
     <li><a href="#">About Us</a></li>
    <li><a href="#">Delivery Information</a></li>
    <li><a href="#">Privacy Policy</a></li>
  <li><a href="#">Terms &amp; Conditions</a></li>
 </ul>
</div>
<div class="col-sm-4">
<h5>Custumer Service</h5>
 <ul class="list-unstyled">
   <li><a href="#">Contact Us</a></li>
   <li><a href="#">Returns</a></li>
   <li><a href="#">Site Map</a></li>
 </ul>
</div>
<div class="col-sm-4">
<h5>My account</h5>
<ul class="list-unstyled">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
</div>
</div>
<hr>
<p>Powered By : <a href="#"><img class="logo" src="images//mrrobotLogo.svg"/></a><br></p>
<span style="text-align=center;"> MR ROBOT © 2016</span>
</footer>';

}
function printItem(){
  echo '<div class="product-thumb transition">
      <div class="image"><a href="#"><img id="zoom_02" src="images/items/macbook_1-200x200.jpg" alt="MacBook" title="MacBook" class="img-responsive" data-zoom-image="images/items/macbook_air.jpg"></a></div>
      <div class="caption">
        <h4><a href="#">MacBook</a></h4>
        <p>
  
    Intel Core 2 Duo processor
  
    Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>
                        <p class="price">
                    $602.00                              <span class="price-tax">Store:Platinum</span>
                  </p>
              </div>
      <div class="button-group">
        <button type="button" ><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
        <button type="button" ><i class="fa fa-heart"></i></button>
        <button type="button" ><i class="fa fa-exchange"></i></button>
      </div>
     </div>
   ';
}

?>