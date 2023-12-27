<?php

$xuat = new Xuat;

$id = $_GET['id'];
$row= $xuat->detailSanPham($id);
$arrdx=$xuat->DanhMucSP(0,5,$row['id_danhmuc']);

require_once("main/views/content/ttsanpham.php");

unset($xuat);