<?php
$tintuc = new TinTuc;
$user = new Account;
require ("checklogin.php");
$user_login = $_SESSION['userdouongonline'];
//$row_quyen = $user ->getAccount($user_login);

$id = $_GET['id'];
$row = $tintuc->detailDonHang($id);
$row_khach=$tintuc->ThongtinKhachHang($row['id_khach']);
$arr_ctdh=$tintuc->dsdonhangSP($id);

require_once('../views/qldonhang/ttdonhang.php');
?>