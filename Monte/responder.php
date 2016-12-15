<?php
if(isset($_POST['getCartContent'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/carts/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;
}
if(isset($_POST['deleteFromCart'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/carts/'.$_POST['cartId']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;




}
if(isset($_POST['UpdateCartQuntity'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/carts/'.$_POST['cartId'].'/'.$_POST['quantity']);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;
}
if(isset($_POST['getUserById'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;




}
if(isset($_POST['placeOrder'])){
	   $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/carts/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result=json_decode($result,true);
$parent[]=array();
	for ($i=0; $i <count($result) ; $i++) { 
    	$item[]=array('id'=>$result[$i]['item']['id']);
    	$item2[]=array('discount'=>$result[$i]['item']['discount'],'price'=>$result[$i]['item']['price'],
 	'quantity'=>$result[$i]['quantity']);
 	$item2['item']=$item;
 	$orderItems[]=$item2;
 	unset($item);
 	unset($item2);
    }
    $parent['orderItems']=$orderItems;
    $parent['additionalNote']=$_POST['additionalNote'];
    $parent['deviceInput']=true;
    $parent['payment']=$_POST['payment'];
    $user=array('id' => $_POST['userId']);
    $parent['user']=$user;
    $parent['deliveryDate']=date("Y/m/d");
    print_r(json_encode($parent));

}
?>