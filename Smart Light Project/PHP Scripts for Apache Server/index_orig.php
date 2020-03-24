<?php
echo nl2br("ECEGR4910 Smart Light Control \n\n LED Status: ");

exec("gpio read 2", $status);
if ($status[0] == "1" ||isset($_GET['enable'])){
  echo "ON";
}else if ($status[0] == "0"){
 echo "OFF";
}

?>

<br/>
<form method = "GET" action = "photoresistorLed.php" >
Auto LED Brightness Adjustment:  
<input type = "submit" value = "Enable" name = "enable">
<input type = "submit" value = "Disable" name = "disable"> 
</form>


MANUAL CONTROL
<form method = "POST" action = "changegpio.php" >
LED:  
<input type = "radio" name = "gpio2" value = "1"> On  
<input type = "radio" name = "gpio2" value = "0" > Off 

<input type = "submit" > 
</form>

<form method = "GET" action = "brightnessAdjust.php">
Brightness Level:
<input type = "submit" value = "1" name = "bright1">
<input type = "submit" value = "2" name = "bright2">
<input type = "submit" value = "3" name = "bright3">
<input type = "submit" value = "4" name = "bright4">
</form>




