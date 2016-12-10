<!--profilePage-->
<?php
//require("functions/connect.php");
require("functions/engine.php");

?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/viewitems.css">
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
 crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">
<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="javascript/viewitems.js"></script>
<!-- price silder-->
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="javascript/navbar.js" type="text/javascript"></script>
<title>View Items</title>

</head>
<body id="viewitems">
<header>
<?php printNavBar();?>  
</header>
<div class="container">
<div class="scroll_to_top" style="display: block;">
        <span id="up_arrow" class="glyphicon glyphicon-menu-up">
      </span></div>
<ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">View Items</a></li>
         </ul>
         <!---mobile view of filters-->
         <div class="row" id="filters">
         <div class="col-xs-12 visible-xs" >
        <nav id="menu" class="navbar">
    <div class="navbar-header"><span class="dropdown-span" id="category">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
      <div class="navbar-collapse navbar-ex1-collapse collapse " >
    <div class="list-group">
          <a data-alias="Desktop" class="list-group-item">Desktop</a>
          <a data-alias="laptop" class="list-group-item">laptop</a>
          <a data-alias="Mobile" class="list-group-item">Mobile</a>
              </div>
    </div>
   
  </nav>
    </div>
       <div class="col-xs-12 visible-xs">
        <nav id="menu" class="navbar">
    <div class="navbar-header"><span class="dropdown-span" id="brand">Brands</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse"><i class="fa fa-bars"></i></button>
    </div>
      <div class="navbar-collapse navbar-ex2-collapse collapse " >
    <div class="list-group">
			    <a data-alias="Apple" class="list-group-item">Apple<span class="badge">12</span></a>
			    <a data-alias="Samsung" class="list-group-item">Samsung<span class="badge">15</span></a>
			    <a data-alias="Toshiba" class="list-group-item">Toshiba<span class="badge">3</span></a>
              </div>
    </div>
   
  </nav>
    </div>
     <div class="col-xs-12 visible-xs">
        <nav id="menu" class="navbar">
    <div class="navbar-header"><span class="dropdown-span" id="more-filter">More Filters</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex3-collapse"><i class="fa fa-bars"></i></button>
    </div>
      <div class="navbar-collapse navbar-ex3-collapse collapse " >
    
              <ul class="list-group">
               <li class="list-group-item"><input type="checkbox" name="more-filter" value="Show in Stock only">Show in Stock only </li>
			   <li class="list-group-item"><input type="checkbox" name="more-filter" value="Special Prices">Special Prices</li>
			   <li class="list-group-item"><input type="checkbox" name="more-filter" value="New Arrivals">New Arrivals</li>
			  </ul>
    </div>
   
  </nav>
    </div>
     <div class="col-xs-12 visible-xs">
        <nav id="menu" class="navbar">
    <div class="navbar-header"><span class="dropdown-span" id="price-filter">Price Filter</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex4-collapse"><i class="fa fa-bars"></i></button>
    </div>
      <div class="navbar-collapse navbar-ex4-collapse collapse " id="price-xs">
     <p>
         <input type="text" id="price-1">
      </p>
      <div id="slider-1"></div>
    </div>
   
  </nav>
    </div>
         </div>
      	<!---end mobile view of filters-->
        <div class="row" >
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs" id="filters">
        <div id="filters-content">
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle text-center" data-toggle="collapse" data-parent="#accordion" href="#panel1">Categories <i class="fa fa-caret-down" ></i></a>
			</h4>
		</div>
		<div id="panel1" class="panel-collapse collapse">
			<div class="panel-body">
               <div class="list-group">
			    <a data-alias="Desktop" class="list-group-item">Desktop</a>
			    <a data-alias="Laptop" class="list-group-item">Laptop</a>
			    <a data-alias="Mobile" class="list-group-item">Mobile</a>
              </div>
			</div>
		</div>
    </div>
	
	
</div>
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle text-center" data-toggle="collapse" data-hover="collapses" data-parent="#accordion" href="#panel2">Brand <i class="fa fa-caret-down" aria-hidden="true"></i></a>
			</h4>
		</div>
		<div id="panel2" class="panel-collapse collapse">
			<div class="panel-body">
               <div class="list-group">
			    <a data-alias="Apple" class="list-group-item">Apple<span class="badge">12</span></a>
			    <a data-alias="Samsung" class="list-group-item">Samsung<span class="badge">15</span></a>
			    <a data-alias="Toshiba" class="list-group-item">Toshiba<span class="badge">3</span></a>
              </div>
			</div>
		</div>
    </div>
	
	
</div>
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle text-center" data-toggle="collapse" data-hover="collapses" data-parent="#accordion" href="#panel3">More Filters <i class="fa fa-caret-down" aria-hidden="true"></i></a>
			</h4>
		</div>
		<div id="panel3" class="panel-collapse collapse">
			<div class="panel-body">
              
              <ul class="list-group">
               <li data-alias="Show in Stock only" class="list-group-item"><input type="checkbox" name="more-filter" value="Show in Stock only">Show in Stock only </li>
			   <li  data-alias="Special Prices" class="list-group-item"><input type="checkbox" name="more-filter" value="Special Prices">Special Prices</li>
			   <li data-alias="New Arrivals" class="list-group-item"><input type="checkbox" name="more-filter" value="New Arrivals">New Arrivals</li>
			  </ul>
              
			</div>
		</div>
    </div>
	
	
</div>
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
                <a  tabindex="-1" class="accordion-toggle text-center" data-toggle="collapse" data-hover="collapses" data-parent="#accordion" href="#panel4">Price Filter <i class="fa fa-caret-down" aria-hidden="true"></i></a>
			</h4>
		</div>
		<div id="panel4" class="panel-collapse collapse">
			<div class="panel-body">
             <p>
         <input type="text" id="price">
      </p>
      <div id="slider-3"></div>
            
			</div>
		</div>
    </div>
	
	
</div>
</div>
</div>
        
        <div class="col-lg-10">
        <div class="row" id="view-navigation">
       <div class="col-md-2 hidden-xs">
       <div class="btn-group btn-group-sm">
            <button type="button" id="list" class="btn btn-default" data-toggle="tooltip" title="List" data-original-title="List"><i class="fa fa-th-list"></i> List</button>
            <button type="button" id="grid" class="btn btn-default  " data-toggle="tooltip" title="Grid" data-original-title="Grid"><i class="fa fa-th"></i> Grid</button>
          </div>
       </div>
     
       <div class="col-md-5 col-xs-6">
	       <div id="search" class="input-group">
	  			<input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
	  			<span class="input-group-btn">
	    		<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
	  			</span>
		    </div>
       	
       </div>
       <div class="col-md-5 col-xs-6">
       <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-sort">Sort By:</label>
            	<select id="input-sort" class="form-control" >
             		 <option value="#" selected="selected">Default</option>
                     <option value="#">Name (A - Z)</option>
                     <option value="#">Name (Z - A)</option>
                     <option value="#">Price (Low &gt; High)</option>
                     <option value="#">Price (High &gt; Low)</option>
                                                        
                </select>
          </div>
       </div>
       </div>
       <div class="row">
       <div class="col-md-10" id="applied-filters">
       	<ul class="breadcrumb">
       	<li>Filters:</li>
       	
       	</ul>
       </div>
       <div class="col-md-2">
        <div class="form-group">
            <a href="#" id="compare-total" class="btn btn-link">Product Compare (0)</a>
       </div>
       </div>
       <div id="products" class="row list-group">
		<?php
       
        
        PrintLastestItems(10,0);
   /* for ($i=0; $i <10 ; $i++) { 
      printItem();
    }
      */
      
			
        ?>

       
       </div>
        	
        </div>

        </div>
        
     
</div>

</div>

<?php printfooter();?>
</body>
</html>