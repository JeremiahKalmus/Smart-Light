<?php


session_start();

/************************LED 2*************************/
$ipAddress2 = $_SESSION['LEDaddress2'];
//$ipAddress2 = "10.133.0.32";

if (isset($_GET['led2bright1'])){
//header('location:http://10.133.0.189/led2/brightness1');
header("location:http://$ipAddress2/led2/brightness1");

}

if (isset($_GET['led2bright2'])){
//header('location:http://10.133.0.189/led2/brightness2');
header("location:http://$ipAddress2/led2/brightness2");
}

if (isset($_GET['led2bright3'])){
//header('location:http://10.133.0.189/led2/brightness3');
header("location:http://$ipAddress2/led2/brightness3");
}

if (isset($_GET['led2bright4'])){
//header('location:http://10.133.0.189/led2/brightness4');
header("location:http://$ipAddress2/led2/brightness4");
}

if (isset($_GET['led2off'])){
//header('location:http://10.133.0.189/led2/off');
header("location:http://$ipAddress2/led2/off");
}
/*****************************************************/



/************************LED 3*************************/
/*$ipAddress3 = $_SESSION['LEDaddress3'];

if (isset($_GET['led3bright1'])){
//header('location:http://10.133.0.189/led2/brightness1');
header("location:http://$ipAddress3/led3/brightness1");

}

if (isset($_GET['led3bright2'])){
header("location:http://$ipAddress3/led3/brightness2");
}

if (isset($_GET['led3bright3'])){
header("location:http://$ipAddress3/led3/brightness3");
}

if (isset($_GET['led3bright4'])){
header("location:http://$ipAddress3/led3/brightness4");
}

if (isset($_GET['led3off'])){
header("location:http://$ipAddress3/led3/off");
}*/
/*****************************************************/


/************************LED 4*************************/
/*$ipAddress4 = $_SESSION['LEDaddress4'];

if (isset($_GET['led4bright1'])){
header("location:http://$ipAddress4/led4/brightness1");

}

if (isset($_GET['led4bright2'])){
header("location:http://$ipAddress4/led4/brightness2");
}

if (isset($_GET['led4bright3'])){
header("location:http://$ipAddress4/led4/brightness3");
}

if (isset($_GET['led4bright4'])){
header("location:http://$ipAddress4/led4/brightness4");
}

if (isset($_GET['led4off'])){
header("location:http://$ipAddress4/led4/off");
}*/
/*****************************************************/


?>
