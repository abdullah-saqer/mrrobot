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
	print_r( $result);




}
if(isset($_POST['UpdateCartQuntity'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/carts/'.$_POST['cartId'].'/'.$_POST['quantity']);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;
}

?>