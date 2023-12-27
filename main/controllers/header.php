<?php

$xuat = new Xuat;
$db1 = new Database;


$arr_dmpages = $xuat->DanhMuc(0,5); 
	require_once("main/views/header.php");
?>