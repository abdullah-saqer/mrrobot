<?php
function init_guest(){
if(isset($_COOKIE['platinumMallCookie']))
	return;
if(isset($_COOKIE['platinumMallGuestCookie']))
	return;

 $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,'http://localhost/PlatinumMall/guests/getMax');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
setcookie("platinumMallGuestCookie", $result+1, time() + 86400*30,"/");

}

?>