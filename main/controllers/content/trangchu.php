<?php
$xuat = new Xuat;
if(isset($_GET['rellsp'])==true){
	$id_lsp=$_GET['rellsp'];
	$item=explode('-', $id_lsp);
	$id_lsp=$item[0];

}else{

	$id_lsp = 0;

}
if(isset($_GET['relsp'])==true){
	$id_sp=$_GET['relsp'];
	$item=explode('-', $id_sp);
	$id_sp=$item[0];

}else{

	$id_sp = 0;

}
$arr_sp=$xuat->SanPham(0,8);
$arr_sptop=$xuat->SanPham(0,5);
$arr_spbc=$xuat->SanPham(0,5);
$arr_spn=$xuat->SanPham(0,5);
$arr_dm=$xuat->DanhMuc(0,10);


require_once("main/views/content/trangchu.php");

unset($xuat);