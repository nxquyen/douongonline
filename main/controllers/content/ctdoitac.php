<?php
$xuat = new Xuat;
$id=$_GET['reldt'];
$item=explode('-', $id);
$id_tt=$item[0];
$row=$xuat->detailDoiTac($id_tt);

$row_user=$xuat->detailUsers($row['edit_user']);

//$arr_tt=$xuat->listTinTucCQ(0,10,$row['idloai']);
//$arr_tb=$xuat->listThongBao(0,9);

require_once("main/views/content/ctdoitac.php");

unset($xuat);