<?php

session_start();

/**************LED 2*************************/
$ipAddress2 = $_SESSION['LEDaddress2'];

if (isset($_GET ['led2enable'])){
//header('location:http://10.133.0.189/led2/auto');
header("location:http://$ipAddress2/led2/auto");

}
if (isset($_GET['led2disable'])){
header("location:http://$ipAddress2/led2/off");
}
/********************************************/

/**************LED 3*************************/
$ipAddress3 = $_SESSION['LEDaddress3'];

if (isset($_GET ['led3enable'])){
header("location:http://$ipAddress3/led3/auto");
}
if (isset($_GET['led3disable'])){
header("location:http://$ipAddress3/led3/off");
}
/********************************************/

/**************LED 4*************************/
/*$ipAddress3 = $_SESSION['LEDaddress4'];

if (isset($_GET ['led4enable'])){
header("location:http://$ipAddress4/led4/auto");
}
if (isset($_GET['led4disable'])){
header("location:http://$ipAdress4/led4/off");*/
/********************************************/





?>
