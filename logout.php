<?php
    if (!isset($_COOKIE['platinumMallCookie']))
        header("Location: /mrrobot/login.php");

    unset($_COOKIE["platinumMallCookie"]);
    setcookie("platinumMallCookie", null, -1, "/");


    header("Location: /mrrobot/login.php");

?>