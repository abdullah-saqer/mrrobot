<?php
    include('global.php');
    session_start();
    ob_start();

    function getStoreId() {
        $storeId = fopen("../Control-Panel/id.txt", "r") or die("Unable to open file!");
        $id = fread($storeId, filesize("../Control-Panel/id.txt"));
        fclose($storeId);
        return $id;
    }

    function printNavBar() {
        //this function to print navigation bar to web pages
        echo '<nav id="top">
  <div class="container">
  <div id="top-links" class="nav pull-left">  
  <ul class="social list-inline">
                    <li ><a id="fb" href="https://www.facebook.com/Platinumjo"><i class="fa fa-lg fa-facebook"></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    <li ><a id="tw" href="#"><i class="fa fa-lg fa-twitter"></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    <li><a id="go" href="#"><i class="fa fa-lg fa-instagram" ></i></a><span class="hidden-xs hidden-sm hidden-md"></span></li>
                    
                </ul></div>
  <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href="#"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>
        <li class="dropdown"><a id="ua" href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">My Account</span> <span class="caret"></span></a>
          ' . printAccountMenu() . '
        </li>
        <li><a href="/mrrobot/profile.php?id=wishlist" id="wishlist-total" title="Wish List ()"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (' . getNumberOfWishList() . ')</span></a></li>
        <li><a href="cart.php" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a></li>
        <li><a href="checkout.php" title="Checkout"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a></li>
      </ul>
    </div>
  </nav>';
    }

    function printfooter() {
        echo '
<footer>
<div class="container">
<div class="row">
<div class="col-lg-4">
<h5>Information</h5>
 <ul class="list-unstyled">
     <li><a href="#">About Us</a></li>
    <li><a href="#">Delivery Information</a></li>
    <li><a href="privacypolicy.htm">Privacy Policy</a></li>
  <li><a href="#">Terms &amp; Conditions</a></li>
 </ul>
</div>
<div class="col-md-4">
<h5>Custumer Service</h5>
 <ul class="list-unstyled">
   <li><a href="#">Contact Us</a></li>
   <li><a href="#">Returns</a></li>
   <li><a href="#">Site Map</a></li>
 </ul>
</div>
<div class="col-md-4">
<h5>My account</h5>
<ul class="list-unstyled">
          <li><a href="/mrrobot/profile.php?id=information">My Account</a></li>
          <li><a href="/mrrobot/profile.php?id=history">Order History</a></li>
          <li><a href="/mrrobot/profile.php?id=wishlist">Wish List</a></li>
          <li><a href="/mrrobot/profile.php?id=setting">Settings</a></li>
        </ul>

</div>
<hr>
<div id="mrrobot-logo">
<p>Powered By : <a href="#"><img class="logo" src="images//mrrobotLogo.svg"/></a><br></p>
</div>
<span style="text-align=center;"> MR ROBOT © 2016</span>
</div>
</footer>
';
    }

    function printItem() {
        echo '<div class="product-thumb transition">
      <div class="image"><a href="#"><img id="zoom_02" src="images/items/macbook_1-200x200.jpg" alt="MacBook" title="MacBook" class="img-responsive" data-zoom-image="images/items/macbook_air.png"></a></div>
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

    function PrintLastestItems($itemCount, $flag) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $GLOBALS['service_url'] . '/items/getitemsbystoreid/' . getStoreId());
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result = json_decode($result, true);

        if (count($result) == 0) {
            echo("<h4> No Items Available");

            return;
        }
        for ($i = 0; $i < sizeof($result) && $i != $itemCount; $i++)
            PrintItemById($result[$i], $flag);


    }

    function PrintItemById($itemObject, $flag) {
        if ($flag == 1)//for index page
            $item = '<div class="item">';
        else //for view items page
            $item = '<div class="item  col-xs-4 col-lg-4 grid-group-item">';

        $item .= '<div class="product-thumb transition">
      <div class="image"><a href="view_item.php?id=' . $itemObject['id'] . '"><img  src="' . getPrimaryphoto($itemObject['photos']) . '" alt="' . $itemObject['name'] . '" title="' . $itemObject['name'] . '" class="img-responsive"></a></div>
      <div class="caption">
        <h4><a href="view_item.php?id=' . $itemObject['id'] . '">' . $itemObject['name'] . '</a></h4>
        <p>' . $itemObject['description'] . '</p>
         <p class="price">' . $itemObject['price'] . ' JOD<span class="price-tax">Store:Mrrobot</span></p>
              </div>
      <div class="button-group">
        <button id="addToCart" data-button="' . $itemObject['id'] . '"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
        <button type="button" id="addToWishlist" data-button="' . $itemObject['id'] . '" ><i class="fa fa-heart"  ></i></button>
        <button type="button" ><i class="fa fa-exchange" id="addToCompare" data-button="' . $itemObject['id'] . '"></i></button>
      </div>
     </div>';
        $item .= "</div>";
        echo $item;
    }

    function getPrimaryphoto($photos) {
        foreach ($photos as &$value) {
            if ($value['primary'] == true)
                return "../Control-Panel/items_photos/" . $value['path'];
        }

        return 'images/products/404.png';

    }

// print cart content when press at cart button 
    function viewcart() {
        if (true) {
            echo '  <li>
        <p class="text-center" id="cart_info">Your shopping cart is empty!</p>
      </li>';
        } else

            echo '<li>
      <table class="table table-striped">
                <tr>
          <td class="text-center">            <a href="#"><img style="width:42px; height:43px;" src="images/items/macbook_1-200x200.jpg" alt="macbook" title="macbook" class="img-thumbnail" /></a>
            </td>
          <td class="text-left"><a href="#">Macbook</a>
                        </td>
          <td class="text-right">1</td>
          <td class="text-right">660 JD</td>
          <td class="text-center"><button type="button" onclick="#" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
        </tr>
                      </table>
    </li>
    <li>
      <div>
        <table class="table table-bordered">
                    <tr>
            <td class="text-right"><strong>Sub-Total</strong></td>
            <td class="text-right">660 JD</td>
          </tr>
            
             
                    <tr>
            <td class="text-right"><strong>Total</strong></td>
            <td class="text-right">660 JD</td>
          </tr>
                  </table>
        <p class="text-right"><a href="/mrrobot/cart.php"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="#"><strong><i class="fa fa-share"></i> Checkout</strong></a></p>
      </div>
    </li>';
    }

    function printAccountMenu() {
        if (!isset($_COOKIE['platinumMallCookie'])) {
            return '
    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/Mrrobot/register.php">Register</a></li>
            <li><a href="/mrrobot/login.php">Login</a></li>
                      </ul>
        </li>';
        } else {
            return '
    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/Mrrobot/profile.php?id=information">Account</a></li>
            <li><a href="/mrrobot/profile.php?id=orders">Orders</a></li>
            <li><a href="/mrrobot/profile.php?id=history">Orders History</a></li>
            <li><a href="/mrrobot/profile.php?id=setting">Settings</a></li>
            <li><a href="/mrrobot/logout.php" onclick="return confirm(\'Are you sure?\')">Log Out</a></li>
                      </ul>
        </li>';

        }
    }

    function printLoading() {
        echo '<div class="item  col-xs-4 col-lg-4 grid-group-item">
      <div class="product-thumb transition" id="loading">
      <div class="image"><a href="#"><img id="zoom_02" src="images/loading.gif" alt="MacBook" title="MacBook" class="img-responsive" ></a></div>
      <div class="caption">
        <h4 class="text-center">Loading</h4>

              </div>
                   <div class="button-group">
        <button type="button" id="cancel-btn"><i class="fa fa-times-circle-o"></i> <span class="hidden-xs hidden-sm hidden-md">Cancel</span></button>
      </div>
     
     </div>
     </div>
   ';
    }

    function init_guest() {
        if (isset($_COOKIE['platinumMallCookie']))
            return;

        if (isset($_COOKIE['platinumMallGuestCookie']))
            return;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $GLOBALS['service_url'] . '/guests/getMax');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($ch), true);
        setcookie("platinumMallGuestCookie", $result['nextValue'], time() + 86400 * 30, "/");

    }

    function printCartItems() {
        $userId = $_COOKIE['platinumMallCookie'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $GLOBALS['service_url'] . '/carts/' . $userId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($ch), true);
        $subTotal = 0;
        echo "<tbody>";
        for ($i = 0; $i < count($result); $i++) {
            $name = $result[$i]['item']['name'];
            $discount = $result[$i]['item']['discount'];
            $cartId = $result[$i]['id'];
            $itemId = $result[$i]['item']['id'];
            $price = $result[$i]['item']['price'] - ($result[$i]['item']['price'] * $discount);
            $quantity = $result[$i]['quantity'];
            $total = $price * $quantity;
            $subTotal += $total;

            echo '<tr><td class="text-left">' . $name . '</td>
             <td class="text-left">' . ($discount * 100) . '% </td>
             <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
             <input type="text" id="quantity" value=' . $quantity . '  class="form-control"> 
             <span class="input-group-btn">
             <button   class="btn btn-primary" data=' . $cartId . '><i class="fa fa-refresh"></i></button>
             <button type="button" class="btn btn-danger" data=' . $total . ' id="' . $cartId . '"><i class="fa fa-times-circle"></i></button>
             </span></div></td>
             <td class="text-right">' . $price . ' JOD </td><td class="text-right" id="itemtotal">' . $total . ' JOD </td></tr>
              ';

        }

        echo " </tbody>
                </table>
            </div>";
        echo '<br>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right" id="Sub-Total">' . $subTotal . '</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Flat Shipping Rate:</strong></td>
                            <td class="text-right" id="Shipping">0 JOD</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right" id="total">' . $subTotal . '</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>';


    }

    function getNumberOfWishList() {
        if (!isset($_COOKIE['platinumMallCookie']))
            return 0;
        $userId = $_COOKIE['platinumMallCookie'];
        $url = $GLOBALS['service_url'] . '/wishlists/' . $userId;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($ch), true);

        return count($result);
    }

    function getUserInfo($userId) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $GLOBALS['service_url'] . '/users/' . $userId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return json_decode(curl_exec($ch), true);
    }

?>