<?php
$tintuc = new TinTuc;
require ("checklogin.php");
$user = new Account;
$user_login = $_SESSION['userdouongonline']; 
$id = $_GET['id'];
$row_dh= $tintuc->detailDonHang($id);
	
$tinhtrang = 1;		

$tintuc->DuyetDonHang($id,$tinhtrang);
echo '<script type="text/javascript">window.location ="main.php?act=qldonhang.html"; </script>';

?>