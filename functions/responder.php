<?php
include('connect.php');
include('engine.php');

//---Deleting photo from the photo slider section
if(isset($_POST['delete_photo']) && !empty($_POST['delete_photo'])){
$name=$_POST['delete_photo'];
unlink("../slider_img/".$name);
echo "1";
}

//----adding new topic request
if(isset($_POST['add_topic']) && !empty($_POST['add_topic'])){
	$subject=$_POST['subject'];
	$body=$_POST['body'];
	$admin=getUsername();
	$query="INSERT INTO `main_topics`(`id`, `Subject`, `Body`, `Date`, `added_by`) VALUES ('','$subject','$body',NOW(),'$admin')";
	if($GLOBALS['conn']->query($query))
		echo "The topic added Successfully";
	else mysql_error();
}

//--Deleting a specific Topic
if(isset($_POST['delete_topic']) && !empty($_POST['delete_topic'])){
$key=$_POST['key'];
$query="DELETE FROM main_topics WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Topic is removed";
	 else mysql_error();
}

//----Check if the user name and the password is correct
if(isset($_POST['validate_login']) && !empty($_POST['validate_login'])){

	if(!empty($_POST["username"]) && !empty($_POST["password"])){

		//$username=mysql_real_escape_string($_POST["username"]);
		//$password=mysql_real_escape_string($_POST["password"]);
		$username=mysqli_real_escape_string($GLOBALS['conn'], $_POST['username']);
		$password=mysqli_real_escape_string($GLOBALS['conn'], $_POST['password']);

		$username=htmlentities($username);
		$password=htmlentities($password);
		$password=openssl_digest($password, 'sha512');
		$query="SELECT id,username,password FROM users WHERE username='$username' and password='$password'";
 		$result=$GLOBALS['conn']->query($query);

		if(mysqli_num_rows($result)==1){
			while($r=$result->fetch_assoc())
			$_SESSION['user_id']=$r['id'];
			echo "1";
		}
		else  echo "0";
	
}
else echo"0";

}
//---Checking The name of the typed category is exist or not
if(isset($_POST['check_category_name']) && !empty($_POST['check_category_name'])){
	$name=strtolower($_POST['name']);
	$query="SELECT * FROM categories where Name='$name'";
	$result=$GLOBALS['conn']->query($query);
	if(mysqli_num_rows($result))
		echo "0";
	else echo"1";
}
//---Adding new Category
if(isset($_POST['add_cat']) && !empty($_POST['add_cat'])){
	$name=strtolower($_POST['name']);
	$query="INSERT INTO `categories`(`id`, `Name`) VALUES ('','$name')";
	if($GLOBALS['conn']->query($query))
		echo "Category ".$name." has been added";
	else echo mysql_error();
}
//Delete specific category
if(isset($_POST['delete_cat']) && ($_POST['delete_cat'])){
$key=$_POST['key'];
$query="DELETE FROM categories WHERE id='$key'";
$query2="DELETE FROM items WHERE cat_id='$key'";
if($GLOBALS['conn']->query($query) && $GLOBALS['conn']->query($query2))
	echo "Category has been deleted";
}

//Add new Item

if(isset($_POST['addNewItem']) && ($_POST['addNewItem'])){
$name=$_POST['item_name'];
$price=$_POST['item_price'];
$quantity=$_POST['quantity'];
$category=$_POST['category'];
$offer=$_POST['item_offer'];
$new_price=$_POST['item_new_price'];
$description=$_POST['description'];
$brand=$_POST['brand'];
$product_code=$_POST['product_code'];
$admin=getUsername();
$query="INSERT INTO `items`(`id`, `name`, `cat_id`, `price`, `new_price`, `offer`, `description`, `added_by`, `quantity`, `brand`, `product_code`) VALUES ('','$name','$category','$price','$new_price','$offer','$description','$admin','$quantity','$brand','$product_code')";
	if($GLOBALS['conn']->query($query))
		echo "1";
	else echo mysql_error();

}
//Deleting specific item
if(isset($_POST['deleteItem']) && ($_POST['deleteItem'])){
	$key=$_POST['key'];
	$query="DELETE FROM items WHERE id='$key'";
	$query2="DELETE FROM photos WHERE item_id='$key'";
	$query3="SELECT * FROM photos";
	$result=$GLOBALS['conn']->query($query3);

	while ($r=$result->fetch_assoc())
		unlink("../".$r["photo_path"]);

	if($GLOBALS['conn']->query($query) && $GLOBALS['conn']->query($query2))
		echo "Item deleted";
	
	else  mysql_error();
	//IMPORTANT----TO DO --> DELETE ALL THE PHOTOS FOR THIS ITEM
}
//--Getting item information
if(isset($_POST['getItemData']) && ($_POST['getItemData'])){
	$key=$_POST['key'];
	$query="SELECT * FROM items WHERE id='$key'";
	$result=$GLOBALS['conn']->query($query);
	$info = array();
	while($r=$result->fetch_assoc()){
		$info[]=$r["name"];
		$info[]=$r["cat_id"];
		$info[]=$r["price"];
		$info[]=$r["new_price"];
		$info[]=$r["offer"];
		$info[]=$r["description"];
		$info[]=$r["quantity"];
		$info[]=$r["brand"];
		$info[]=$r["product_code"];
	}
	echo json_encode($info);
}
//-Update Item information
if(isset($_POST['updatItem']) && ($_POST['updatItem'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$category=$_POST['category'];
	$offer=$_POST['offer'];
	$new_price=$_POST['new_price'];
	$description=$_POST['description'];
	$brand=$_POST['brand'];
	$product_code=$_POST['product_code'];
	$key=$_POST['key'];
	
	$query="UPDATE `items` SET `name`='$name',`cat_id`='$category',`price`='$price',`new_price`='$new_price',`offer`='$offer',`description`='$description',`quantity`='$quantity',`brand`='$brand' ,`product_code`='$product_code'  WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Item Updated";
	else mysql_error();
}

if(isset($_POST['getItemPhotos']) && ($_POST['getItemPhotos'])){
	$key=$_POST['key'];
	$query="SELECT * FROM photos where item_id='$key'";
	$result=$GLOBALS['conn']->query($query);
	$photos=array();
	while($row=$result->fetch_assoc()){
		$photos[]=$row["id"];
		$photos[]=$row["photo_path"];
	}

	echo json_encode($photos);
}
//----

if(isset($_GET['delete_item_photo']) && ($_GET['delete_item_photo'])){
$key=$_GET['key'];
$query="DELETE FROM photos where id='$key'";
$query2="SELECT * FROM photos";
$result=$GLOBALS['conn']->query($query2);
while($r=$result->fetch_assoc()){
	unlink("../".$r["photo_path"]);
	
}

if($GLOBALS['conn']->query($query))
	echo "Photo Deleted";
else mysql_error();
}
//makePrimary

if(isset($_GET['makePrimary']) && ($_GET['makePrimary'])){
	$key=$_GET['key'];
	$photo_key=$_GET['photo_key'];
	$query0="UPDATE `photos` SET `primary_photo`=false WHERE item_id='$photo_key'";
	$GLOBALS['conn']->query($query0);
	$query="UPDATE `photos` SET `primary_photo`=true WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Done";
	else mysql_error();
}
//--- get items by category
if(isset($_POST['getItemsWithCategory']) && ($_POST['getItemsWithCategory'])){
$key=$_POST['key'];
	if($key==0)
	   $query="SELECT * FROM items";
	   else
			$query="SELECT * FROM items WHERE cat_id='$key'";
$result=$GLOBALS['conn']->query($query);
$data='';
while($row=$result->fetch_assoc()){
		$id=$row["id"];
		$query2="SELECT * FROM photos WHERE (item_id='$id' AND primary_photo=true)";
		$result2=$GLOBALS['conn']->query($query2);
		$photo='<img src="../images/placeholder.jpg"/>';
		//<img src="../images/placeholder.jpg"/>
		if(mysqli_num_rows($result2)==true){
			$photo='<img src="../';
		 while($row2=$result2->fetch_assoc())
		 	$photo.=$row2["photo_path"];
		 $photo.='"/>';
		}
		$data.='<div id="item_token">
			<div id="item_photo">'.$photo
	  		.'</div>
	  		<div id="bottom_container">
	  			<div id="item_name">
		';
		$data.= '<p>'.$row['name'].'</p>
		</div>
		<div id="item_buttons">
	  		<i alt="'.$row['id'].'" title="Edit this item" id="edit_item" class="fa fa-gear"></i><br>
	  		<i alt="'.$row['id'].'" title="Delete this item" id="delete_item" class="fa fa-trash"></i>
	    </div>
	    </div>
	    </div>
		';
	}
	echo $data;
}
//--get items by search query

if(isset($_POST['getItemsByquery']) && ($_POST['getItemsByquery'])){
$phrase=$_POST['query'];
$query='SELECT * FROM items WHERE name like "%'.$phrase.'%"';
$result=$GLOBALS['conn']->query($query);
$data='';
while($row=$result->fetch_assoc()){
		$id=$row["id"];
		$query2="SELECT * FROM photos WHERE (item_id='$id' AND primary_photo=true)";
		$result2=$GLOBALS['conn']->query($query2);
		$photo='<img src="../images/placeholder.jpg"/>';
		//<img src="../images/placeholder.jpg"/>
		if(mysqli_num_rows($result2)==true){
			$photo='<img src="../';
		 while($row2=$result2->fetch_assoc())
		 	$photo.=$row2["photo_path"];
		 $photo.='"/>';
		}
		$data.='<div id="item_token">
			<div id="item_photo">'.$photo
	  		.'</div>
	  		<div id="bottom_container">
	  			<div id="item_name">
		';
		$data.= '<p>'.$row['name'].'</p>
		</div>
		<div id="item_buttons">
	  		<i alt="'.$row['id'].'" title="Edit this item" id="edit_item" class="fa fa-gear"></i><br>
	  		<i alt="'.$row['id'].'" title="Delete this item" id="delete_item" class="fa fa-trash"></i>
	    </div>
	    </div>
	    </div>
		';
	}
	echo $data;
}

if(isset($_POST['GuestAddToCart']) && !empty($_POST['GuestAddToCart'])){
	$itemId=$_POST['item_id'];
	// Here you must check if the use logged in or not... if it does then register the item in his id account else do the following:
	$guestId=getGuestNumber();
	if($guestId!="no-id"){
		$check="SELECT * FROM guests_carts WHERE (guest_number='$guestId' AND item_id='$itemId')";
		$result=$GLOBALS['conn']->query($check);
		if(mysqli_num_rows($result)==0){
			$query="INSERT INTO `guests_carts`(`id`, `guest_number`, `item_id`, `date`, `quantity`) VALUES ('','$guestId','$itemId',NOW(),'1')";
			$result=$GLOBALS['conn']->query($query);
			if($result)
				echo "1";
			else "0";
	    }
	    else echo "2";
	}
	else
		echo "0";

}
//----- get more item when the scroll is down
if(isset($_POST['getMoreItems']) && !empty($_POST['getMoreItems'])){
  $items=array();
  $skip=$_POST['skip'];

  $query="SELECT * FROM `items` LIMIT 4 OFFSET $skip";

  if(isset($_POST['brand']) && !empty($_POST['brand']) && isset($_POST['cate']) && !empty($_POST['cate'])){
    $phrase=$_POST['brand'];
    $id=$_POST['cate'];
    $query="SELECT * FROM `items` WHERE (brand='$phrase' AND cat_id='$id') LIMIT 4 OFFSET $skip";
  }
  else
	  if(isset($_POST['cate']) && !empty($_POST['cate'])){
	    $id=$_POST['cate'];
	    $query="SELECT * FROM `items` WHERE cat_id='$id' LIMIT 4 OFFSET $skip";
	  }
  else if(isset($_POST['brand']) && !empty($_POST['brand'])){
   $phrase=$_POST['brand'];
   $query="SELECT * FROM `items` WHERE brand='$phrase' LIMIT 4 OFFSET $skip";
  }

  $result=$GLOBALS['conn']->query($query);
  if(!$result)die("0");
  while($row=$result->fetch_assoc()){
	  	$item= array();
	    $itemId=$row['id'];
	    $photo_query="SELECT * FROM photos WHERE (item_id='$itemId' AND primary_photo='1') ";                 
	    $result2=$GLOBALS['conn']->query($photo_query);
	    $path_row=$result2->fetch_assoc();
	    $path=$path_row['photo_path'];
	    $item[]=$itemId;
	    $item[]=$row['name'];
	    $item[]=$path;
	    $item[]=$row['description'];
	    $item[]=$row['price'];
	    $item[]=$row['brand'];
	    $item[]=$row['quantity'];
	    $items[]=$item;
    	           
    }
    sleep(1);
  	if(count($items)>0)
    	echo json_encode($items);
    else echo "0";
}

//--Get item by search query
if(isset($_POST['searchQuery']) && !empty($_POST['searchQuery'])){
	$items=array();
    $phrase=$_POST['query'];
	$query='SELECT * FROM items WHERE name LIKE "%'.$phrase.'%" ';
	$query2='SELECT * FROM items WHERE product_code LIKE "%'.$phrase.'%"';

  	$r=$GLOBALS['conn']->query($query);
  	$r2=$GLOBALS['conn']->query($query2);
  	$num_rows=mysqli_num_rows($r);
  	$num_rows2=mysqli_num_rows($r2);
  	$result=($num_rows>=$num_rows2)?$r:$r2;
	if(!$result)die("0");
  while($row=$result->fetch_assoc()){
	  	$item= array();
	    $itemId=$row['id'];
	    $photo_query="SELECT * FROM photos WHERE (item_id='$itemId' AND primary_photo='1') ";                 
	    $result2=$GLOBALS['conn']->query($photo_query);
	    $path_row=$result2->fetch_assoc();
	    $path=$path_row['photo_path'];
	    $item[]=$itemId;
	    $item[]=$row['name'];
	    $item[]=$path;
	    $item[]=$row['description'];
	    $item[]=$row['price'];
	    $item[]=$row['brand'];
	    $item[]=$row['quantity'];
	    $items[]=$item;
    	           
    }
  	if(count($items)>0)
    	echo json_encode($items);
    else echo "0";
}

//-- Get more filter box information
if(isset($_POST['getCatAndBrand']) && !empty($_POST['getCatAndBrand'])){
	$query="SELECT DISTINCT cat_id,brand FROM items";
	$result=$GLOBALS['conn']->query($query);
	$content=array();
	while($row=$result->fetch_assoc()){
		$cat_name=getCategoryById($row['cat_id']);
		$brand=$row['brand'];
		$id=$row['cat_id'];
		$query2="SELECT * FROM items WHERE cat_id='$id' AND brand='$brand'";
		$result2=$GLOBALS['conn']->query($query2);
		$data=mysqli_num_rows($result2);
		$cBrand=strtoupper($brand[0]);
		for($i=1;$i<strlen($brand);$i++)
			$cBrand.=$brand[$i];
		$content[]=[$row['cat_id'],$cat_name,$cBrand." (".$data.")"];
	}
	sort($content);
	echo json_encode($content);
}
//-- Remove item from the guest cart 
if(isset($_POST['removeItemFromGuestCart']) && !empty($_POST['removeItemFromGuestCart'])){
	$id=$_POST['id'];
	$guestNumber=getGuestNumber();
	if($guestNumber=="no-id"){
		echo "0";
		die();
	}
	$query="DELETE FROM `guests_carts` WHERE guest_number='$guestNumber' AND item_id='$id'";
	$result=$GLOBALS['conn']->query($query);
	echo ($result)?"1":"0";
}

//----

if(isset($_POST['updateGuestCart']) && !empty($_POST['updateGuestCart'])){
	$ids=json_decode($_POST['ids']);
	$quantities=json_decode($_POST['quan']);
	$guestNumber=getGuestNumber();
	$changeFlag=0;
	for($i=0;$i<count($quantities);$i++){
		$s=$quantities[$i];
		for($j=0;$j<strlen($s);$j++)
			if(!($s[$j]>='0' && $s[$j]<='9') || (strlen($s)==1 && $s[0]=='0')){
				echo "2";
				die();
			}
	}
	

	for($i=0;$i<count($ids);$i++){
		$q=$quantities[$i];
		$id=$ids[$i];
		$test="SELECT quantity FROM guests_carts WHERE guest_number='$guestNumber' AND item_id='$id'";
		$result=$GLOBALS['conn']->query($test);
		$row=$result->fetch_assoc();
		$changeFlag=($q!=$row['quantity'])?1:$changeFlag;
		$query="UPDATE `guests_carts` SET `quantity`='$q'  WHERE guest_number='$guestNumber' AND item_id='$id'";
		$GLOBALS['conn']->query($query);
	}

	echo ($changeFlag)?"1":"0";
}


?>