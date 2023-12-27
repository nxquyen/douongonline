<?php
$xuat = new Xuat;
$id=$_GET['reltt'];
$item=explode('-', $id);
$id_tt=$item[0];
$row=$xuat->detailTinTuc($id_tt);

$row_user=$xuat->detailUsers($row['edit_user']);
$arr_tt=$xuat->TinTuc(0,15);


require_once("main/views/content/cttintuc.php");

unset($xuat);