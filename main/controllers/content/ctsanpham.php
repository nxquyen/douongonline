<?php
$xuat = new Xuat;
$id=$_GET['relsp'];
$item=explode('-', $id);
$id_tt=$item[0];
$row=$xuat->detailSanPham($id_tt);

$row_user=$xuat->detailUsers($row['edit_user']);
$arr_tt=$xuat->SanPhamLoai(0,5,$row['idloai']);
$arr_anh=$xuat->AnhSanPham($row['id']);

require_once("main/views/content/ctsanpham.php");

unset($xuat);