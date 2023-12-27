<?php

session_start();

unset($_SESSION['userdouongonline']);
unset($_SESSION['passdouongonline']);
unset($_SESSION['lastlogindouongonline']);
unset($_SESSION['linkdouongonline']);
unset($_SESSION['uridouongonline']);

$host  = $_SERVER['HTTP_HOST'];
$str   = explode("/",dirname($_SERVER['PHP_SELF']));
$uri = "";

for($i=1;$i<count($str)-1;$i++){
	$uri= $uri . "/" . $str[$i];
}

$extra = 'index.php';
header("Location: http://$host$uri/$extra");
exit;