<?php
exec("gpio mode 2 out");

if (isset($_GET['on'])){
system("sudo killall python");
exec ( "gpio write 2 1");
}

if (isset($_GET['off'])){
system("sudo killall python");
exec ( "gpio write 2 0");
}
header('location:/index.php');

?>
