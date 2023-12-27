<?php
$xuat = new Xuat;
$id=$_GET['reltd'];
$item=explode('-', $id);
$id_tt=$item[0];
$row=$xuat->detailTuyenDung($id_tt);

$row_user=$xuat->detailUsers($row['edit_user']);

$arr_tt=$xuat->listTuyenDung(0,10);
//$arr_tb=$xuat->listThongBao(0,9);

require_once("main/views/content/cttuyendung.php");

unset($xuat);