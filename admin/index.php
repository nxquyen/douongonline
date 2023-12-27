<?php

session_start();

$host  = $_SERVER['HTTP_HOST'];
$str   = explode("/",dirname($_SERVER['PHP_SELF']));
$uri = "";

for($i=1;$i<count($str);$i++){
	$uri= $uri . "/" . $str[$i];
}  

if(!isset($_SESSION['userdouongonline'])||!isset($_SESSION['passdouongonline'])){
	require_once("views/login.php");
	exit;
}else{
	$extra = 'controllers/main.php';
	header("Location: http://$host$uri/$extra");
	exit;
}