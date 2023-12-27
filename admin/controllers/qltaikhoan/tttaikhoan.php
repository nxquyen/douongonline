<?php
$tintuc = new TinTuc;
$user = new Account;
require ("checklogin.php");
$user_login = $_SESSION['userdouongonline'];
//$row_quyen = $user ->getAccount($user_login);

$id = $_GET['id'];
$row = $tintuc->detailTaiKhoan($id);

require_once('../views/qltaikhoan/tttaikhoan.php');
?>