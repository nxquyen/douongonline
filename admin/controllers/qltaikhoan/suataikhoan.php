<?php
$tintuc = new TinTuc;
require ("checklogin.php");
$user = new Account;
$user_login = $_SESSION['userdouongonline']; 
$id = $_GET['id'];
$row_dm= $tintuc->detailTaiKhoan($id);
if(isset($_POST['btnSua'])==true){ 	
	$tendangnhap = trim($_POST["name"]);	
	$matkhau = trim($_POST["pass"]);		
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$edit_time=date('Y-m-d H:i:s');
	$daycreate=date("Y-m-d");
	$active=1;
	$flag=1; $error = "";
	if ($tendangnhap == NULL){$flag=0;$error = "Cần nhập tên tài khoản!";}

	if($flag){
		$tintuc->editTaiKhoan($id,$tendangnhap,$matkhau,$user_login,$edit_time,$daycreate,$user_login,$active);
		echo '<script type="text/javascript">alert("Sửa thành công!");window.location ="main.php?act=qltaikhoan.html"; </script>';
	}else{
		echo '<script type="text/javascript">alert("'.$error.'");</script>';
	}
}
else{
	$id = $_GET['id'];
	$row= $tintuc->detailTaiKhoan($id);
    require_once('../views/qltaikhoan/suataikhoan.php');
}
?>