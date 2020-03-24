<?php

if($_POST['control'] == "enable"){
system("cd /usr/lib/cgi-bin");
system("sudo python /home/pi/photoresistor_w_led.py");
header('location:/index.php');
}else{
system("sudo killall python");
header('location:/index.php');

}
?>
