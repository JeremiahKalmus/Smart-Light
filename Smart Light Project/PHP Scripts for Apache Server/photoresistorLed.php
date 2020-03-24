<?php
//session_start();


if (isset($_GET ['enable'])){
//$_SESSION["ledon"] = "1";
system("sudo killall python");
system("sudo python /home/pi/photoresistor_w_led.py" );
header('location:/index.php');
}
if (isset($_GET['disable'])){
//$_SESSION["ledon"] = "0";
system("sudo killall python");
system("gpio write 2 0");
header('location:/index.php');
}
?>
