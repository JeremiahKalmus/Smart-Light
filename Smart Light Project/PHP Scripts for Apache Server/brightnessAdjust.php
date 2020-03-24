<?php
//session_start();

if (isset($_GET['bright1'])){
//$_SESSION["ledon"] = "1";
system("sudo killall python");
system("sudo python /home/pi/brightnessAdjust1.py");
header('location:/index.php');
}

if (isset($_GET['bright2'])){
//$_SESSION["ledon"] = "1";
system("sudo killall python");
system("sudo python /home/pi/brightnessAdjust2.py");
header('location:/index.php');
}

if (isset($_GET['bright3'])){
//$_SESSION["ledon"] = "1";
system("sudo killall python");
system("sudo python /home/pi/brightnessAdjust3.py");
header('location:/index.php');
}

if (isset($_GET['bright4'])){
//$_SESSION["ledon"] = "1";
system("sudo killall python");
system("sudo python /home/pi/brightnessAdjust4.py");
header('location:/index.php');
}

if (isset($_GET['off'])){
//$_SESSION["ledon"] = "0";
system("sudo killall python");
system("gpio write 2 0");
header('location:/index.php');
}



?>
