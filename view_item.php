<!--profilePage-->
<?php
//require("functions/connect.php");
require("functions/engine.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/viewitem.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
 crossorigin="anonymous"></script><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">

<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="javascript/magnific-popup/magnific-popup.css">
<!-- Magnific Popup core JS file -->
<script src="javascript/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="javascript/viewitem.js"></script>
<title>View Item</title>

</head>
<body id="profile">
<header>
<?php printNavBar();?>  
</header>
<div class="container">
<ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Mobile</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="#" id="current-tab">Iphone 6 Gold</a></li>
      </ul>
   <div id="page-content" class="row">
       <div class="col-sm-8">
          <ul class="thumbnails">
            <li><a class="thumbnail" href="images/products/iphone-6-1.png" title="Iphone"><img src="images/products/iphone-1.png" title="Iphone" alt="Iphone"></a>
            <span class="tags">
            <span class="price-tag"><a href="javascript:void()">100 JOD</a></span>
             </span>
             </li>
            <li class="image-additional"><a class="thumbnail" href="images/products/iphone-6-2.png" title="Iphone"> <img src="images/products/iphone-6-2.png" title="Iphone" alt="Iphone"></a></li>
            <li class="image-additional"><a class="thumbnail" href="images/products/iphone-6-3.png" title="Iphone"> <img src="images/products/iphone-6-3.png" title="Iphone" alt="Iphone"></a></li>
            <li class="image-additional"><a class="thumbnail" href="images/products/iphone-6-3.png" title="Iphone"> <img src="images/products/iphone-6-4.png" title="Iphone" alt="Iphone"></a></li>
          </ul>
          <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-description" data-toggle="tab" aria-expanded="true">Description</a></li>
          
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description"><p class="intro">
             iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.</p>
            </div>           
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="btn-group">
            <button type="button"  class="btn btn-default"><i class="fa fa-heart"></i></button>
            <button type="button" class="btn btn-default"><i class="fa fa-exchange"></i></button>
          </div>
          <h1>Iphone 6 Gold-Rose</h1>
          <ul class="list-unstyled">
             <li>Brand: <a href="#">Apple</a></li>
             <li>Availability: In Stock</li>
             <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">360 View</button></li>
          </ul>
          <ul class="list-unstyled">
             <li>
              <h2>550 JOD</h2>
             </li>
                                   
          </ul>
          <div id="product">
              <div class="form-group">
              <label class="control-label" for="input-quantity">Quantity</label>
              <div class="input-group">
                 <span class="input-group-btn">
                  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
                 </span>
                <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="5">
                 <span class="input-group-btn">
                  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                    <span class="glyphicon glyphicon-plus"></span>
                  </button>
                  </span>
               </div>
              <input type="hidden" name="product_id" value="">
              <br>
              <button type="button" id="button-cart"  class="btn btn-primary btn-lg btn-block">Add to Cart</button>
              </div>
          </div>
                  
        </div>
    </div>

  </div>
  <!--360-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">360 View</h4>
      </div>
      <div class="modal-body">
        <div style="display:inline-block;overflow:hidden;margin-left: 36px;" >
  <div id=left-rotate >
  <img src="https://maxcdn.icons8.com/Color/PNG/48/Editing/rotate_left-48.png" title="Rotate Left"  onclick="changeImage(-1)">
    </div>
  
        <div id="slideshow">
        <img alt="slideshow" src="360photo//Iphone7//Apple-iPhone-7-360-0.jpg" id="imgClickAndChange" height="479px" onclick="changeImage(1)" />
    
  </div>
  <div id="right-rotate" >
  <img src="https://maxcdn.icons8.com/Color/PNG/48/Editing/rotate_right-48.png" title="Rotate Left"  onclick="changeImage(1)">
    </div>
  
  <div id="slide-info">
  <p>Use the keyboard arrows<span class="arrows" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to rotate the phone.</p>
  </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php printfooter();?>

</body>
</html>
