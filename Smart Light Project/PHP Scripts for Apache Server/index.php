<font size = "6">IoT Smart Light Control</font>
<br/>
<!--<font size = "4">LED 1 Status:</font>-->

<?php

//exec("gpio mode 8 out");
//exec("gpio read 8", $status);
//session_start();

//$_SESSION["LEDaddress2"] = "10.133.0.35";
//$_SESSION["LEDaddress3"] = "";
//$_SESSION["LEDaddress4"] = "";

//exec("gpio read 2", $status);
//echo $status[0];
/*if($status[0] == "1"){
  echo "<b><div style = 'color: #FFCC11'>ON</div></b>";
}else{
 echo "<b><div style = 'color: #A02422'>OFF</div></b>";
}*/

?>

<br/>
<font size = "4">Auto LED Brightness Adjustment Mode</font>
<br/>
<form method = "GET" action = "photoresistorLed.php" >
LED 1:
<input type = "submit" style = "background-color: #FFCC11" value = "Enable" name = "enable">
<input type = "submit" style = "color: white; background-color: #A02422" value = "Disable" name = "disable">
</form> 

<!--
<form method = "GET" action = "photoresistorLed2.php" >
LED 2:
<input type = "submit" style = "background-color: #FFCC11" value = "Enable" name = "led2enable">
<input type = "submit" style = "color: white; background-color: #A02422" value = "Disable" name = "led2disable">
<br/>
<br/>

LED 3:
<input type = "submit" style = "background-color: #FFCC11" value = "Enable" name = "led3enable">
<input type = "submit" style = "color: white; background-color: #A02422" value = "Disable" name = "led3disable">
<br/>
<br/>

LED 4:
<input type = "submit" style = "background-color: #FFCC11" value = "Enable" name = "led4enable">
<input type = "submit" style = "color: white; background-color: #A02422" value = "Disable" name = "led4disable">


</form>-->


<font size = "4">Manual Brightness Control</font>
<form method = "GET" action = "brightnessAdjust.php">
LED 1:
<input type = "submit" style = "background-color: #FFF9BC" value = "1" name = "bright1">
<input type = "submit" style = "background-color: #FFF377" value = "2" name = "bright2">
<input type = "submit" style = "background-color: #FFE900" value = "3" name = "bright3">
<input type = "submit" style = "background-color: #FFCC11" value = "4" name = "bright4">
<input type = "submit" style = "color: white; background-color: #A02422" value = "OFF" name = "off">
</form>

<!--
<form method = "GET" action = "brightnessAdjust2.php">
LED 2:
<input type = "submit" style = "background-color: #FFF9BC" value = "1" name = "led2bright1">
<input type = "submit" style = "background-color: #FFF377" value = "2" name = "led2bright2">
<input type = "submit" style = "background-color: #FFE900" value = "3" name = "led2bright3">
<input type = "submit" style = "background-color: #FFCC11" value = "4" name = "led2bright4">
<input type = "submit" style = "color: white; background-color: #A02422" value = "OFF" name = "led2off">
</form>

<form method = "GET" action = "brightnessAdjust3.php">
LED 3:
<input type = "submit" style = "background-color: #FFF9BC" value = "1" name = "led3bright1">
<input type = "submit" style = "background-color: #FFF377" value = "2" name = "led3bright2">
<input type = "submit" style = "background-color: #FFE900" value = "3" name = "led3bright3">
<input type = "submit" style = "background-color: #FFCC11" value = "4" name = "led3bright4">
<input type = "submit" style = "color: white; background-color: #A02422" value = "OFF" name = "led3off">
<br/>

LED 4:
<input type = "submit" style = "background-color: #FFF9BC" value = "1" name = "led4bright1">
<input type = "submit" style = "background-color: #FFF377" value = "2" name = "led4bright2">
<input type = "submit" style = "background-color: #FFE900" value = "3" name = "led4bright3">
<input type = "submit" style = "background-color: #FFCC11" value = "4" name = "led4bright4">
<input type = "submit" style = "color: white; background-color: #A02422" value = "OFF" name = "led4off">


</form> -->

<!--<form method = "GET" action = "getIp.php" >

<input type = "hidden"  name = "ip2"> 
<input type = "hidden" name = "ip3">
</form>-->


