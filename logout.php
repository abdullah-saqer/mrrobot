<?php 
if(!isset($_COOKIE['platinumMallCookie']))
header("Location: /mrrobot/login.php"); 

setcookie("platinumMallCookie","", time() -3600*24*30,"/");
header("Location: /mrrobot/login.php");

?>