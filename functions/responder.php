<?php
if(isset($_POST['addNewUser'])){

	$data=array();
	 $data["firstName"] = $_POST['firstName'];
	 $data["lastName"] = $_POST['lastName'];
	 $data["cellPhone"] = $_POST['telephone'];
	 $data["email"] = $_POST['email'];
	 $data["city"] = $_POST['city'];
	 $data["address1"] = $_POST['address'];
	 $data["address2"] = isset($_POST['address2'])?$_POST['address2']:'';
	 $data["password"] = hash('sha256', $_POST['password']);

	 $data["subscribe"] = $_POST['sub'];
	 $data["date"]=$_POST['date'];
	$data = json_encode($data);

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'));
	$result = curl_exec($ch);
	echo $result;
}

if(isset($_POST['checkEmail'])){


	$data=array();
	
	$data["email"] = $_POST['email'];
	$data = json_encode($data);

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['email']);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	die($result);
	
}
if(isset($_POST['userLogin'])){
	$data=array();
	
	$data["email"] = $_POST['email'];
	$data["password"] = hash('sha256', $_POST['password']);


    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['email'].'/'.$data['password']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	if($result!=-1){
	setcookie("platinumMallCookie", $result, time() + 86400*30,"/");
	}
	echo $result;


}

if(isset($_POST['getUserById'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;




}
if(isset($_POST['getUserWishList'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/wishLists/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result=json_decode($result,true);
	die(json_encode($result));




}
if(isset($_POST['deleteFromWishlist'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/wishLists/'.$_POST['wishListId']);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	print_r( $result);




}

if(isset($_POST['ChangePersonal'])){
	$fname=$_POST['firstName'];
	 $lname=$_POST['lastName'];
	 $tel=$_POST['telephone'];
	 $email=$_POST['email'];
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result=json_decode($result,true);
	$result["firstName"]= $fname;
	$result["lastName"]=$lname;
	$result["cellPhone"]=$tel;
	$result["email"]=$email;
	$result=json_encode($result);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $result); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'));
	$result = curl_exec($ch);
	echo $result;
}
if(isset($_POST['ChangeAddress'])){
	$add1=$_POST['address1'];
	 $add2=$_POST['address2'];
	 $city=$_POST['city'];
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result=json_decode($result,true);
	$result["address1"]= $add1;
	$result["address2"]=$add1;
	$result["city"]=$city;
	
	$result=json_encode($result);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $result); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'));
	$result = curl_exec($ch);
	echo $result;
}
if(isset($_POST['ChangePassword'])){
	$old_password=hash('sha256', $_POST['old_password']);
	$new_password=$_POST['new_password'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$result=json_decode($result,true);
	if($old_password!=$result['password']){
		die("Old password is incorrect");
	}
	$result['password']=hash('sha256',$new_password);
	$result=json_encode($result);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/users');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $result); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'));
	$result = curl_exec($ch);
	echo $result;
}
if(isset($_POST['getOrdersByUserId'])){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/orders/'.$_POST['userId']);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;

}
if(isset($_POST['getOrdersItemsById'])){
	 $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/orderItems/'.$_POST['id']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;
}

if(isset($_POST['getBrandByItemId'])){
	}

?>