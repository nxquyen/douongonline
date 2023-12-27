<?php
$xuat = new Xuat;

if(isset($_GET['num'])==true){

	$num = $_GET['num'];

}else{

	$num = 1;

}


	$arr_dt=$xuat->listDoiTac(0,0);
	$sum = count($arr_dt);
	$limit = 10;
	$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
	$start = ($num-1)*$limit;
	$arr_dt = $xuat->listDoiTac($start,$limit);


require_once("main/views/content/doitac.php");

unset($xuat);