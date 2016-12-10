<?php
//require("functions/connect.php");
require("functions/engine.php");

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="pc/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="pc/css/style.css"> <!-- Resource style -->
	<script src="pc/js/modernizr.js"></script> <!-- Modernizr -->
	<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  	
	<title>Products Comparison </title>
</head>
<body>
<header>
	<?php printNavBar();?>
</header>
<div class="container">
<ul class="breadcrumb">
        <li><a href="/mrrobot"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Compare Product</a></li>
      </ul>
      </div>
	<section class="cd-intro">
		<h1>Products Comparison By MrRobot</h1>
	</section> <!-- .cd-intro -->

	<section class="cd-products-comparison-table">
		<header>
			<h2>Compare Models</h2>

			<div class="actions">
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>

		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">Models</div>
				<ul class="cd-features-list">
					<li>Price</li>
					<li>BATTERY</li>
					<li>BODY</li>
					<li>CAMERA</li>
					<li>Color</li>
					<li>DISPLAY</li>
					<li>NETWORK</li>
				</ul>
			</div> <!-- .features -->
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
			<?php
			$features = array();
			$items = explode(",", $_COOKIE['compareItems']);
			for ($i=0; $i <count($items) ; $i++) { 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/items/'.$items[$i]);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			
				$result=json_decode($result,true);
				
				$features=$result['specifications'];
				$li="";
				foreach ($features as &$value){
					$li.='<li>'.$value['specificationValue'].'</li>';

				}
					$s='
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<div class="img-responsive">
							<img src="'.getPrimaryphoto($result['photos']).'" alt="product image">
							</div>
							<h3>'.$result['name'].'</h3>
						</div> 

						<ul class="cd-features-list">
							<li>'.$result['price'].' JOD</li>
							'.$li.'
							
						</ul>
					</li> 

						';
						echo $s;
									  }?>
				
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->

<script src="pc/js/jquery-2.1.4.js"></script>
<script src="pc/js/main.js"></script> 
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><!-- Resource jQuery -->
<?php printfooter();?>
</body>
</html>