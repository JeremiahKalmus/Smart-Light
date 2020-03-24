<?php
//10.133.0.32/getIp.php?ip2=.....
session_start();

/*************LED 2**********************/
//$ipAddress2 = $_SESSION['LEDaddress2'];
//$_SESSION["LEDaddress2"] = "....";

if (isset($_GET['ip2'])){
$_SESSION["LEDaddress2"] = $_GET['ip2'];

header('location:/index.php');
}


/**************************************/

/*************LED 3**********************/

if (isset($_GET['ip3'])){
$_SESSION["LEDaddress3"] = $_GET['ip3'];

header('location:/index.php');
}


/**************************************/




?>
