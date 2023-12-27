<?php
$xuat = new Xuat;
if(isset($_GET['num'])==true){

	$num = $_GET['num'];

}else{

	$num = 1;
}
$rowspdm = $xuat->DanhMucSP(0,2,$id);
$sum = count($rowspdm);
$limit = 10;
$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
$start = ($num-1)*$limit;
$rowspdm = $xuat->DanhMucSP($start,$limit,$id);
$arr_dm=$xuat->DanhMuc(0,10);

require_once("main/views/content/sanphamdm.php");

unset($xuat);