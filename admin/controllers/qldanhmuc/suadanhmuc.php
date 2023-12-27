<?php
$tintuc = new TinTuc;
require ("checklogin.php");
$user = new Account;
$user_login = $_SESSION['userdouongonline']; 
$id = $_GET['id'];
$row_dm= $tintuc->detailDanhMuc($id);
if(isset($_POST['btnSua'])==true){ 	
	$tendanhmuc = trim($_POST["name"]);	
	$mota = trim($_POST["mota"]);	
	$name_link= ChangeToSlugChuan($tendanhmuc );		
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$edit_time=date('Y-m-d H:i:s');
	$daycreate=date("Y-m-d");
	$active=1;
	$flag=1; $error = "";
	if ($tendanhmuc == NULL){$flag=0;$error = "Cần nhập tên Danh Mục!";}

	if($flag){
		$tintuc->editDanhMuc($id,$tendanhmuc,$name_link,$mota,$user_login,$edit_time,$daycreate,$active);
		echo '<script type="text/javascript">alert("Sửa thành công!");window.location ="main.php?act=qldanhmuc.html"; </script>';
	}else{
		echo '<script type="text/javascript">alert("'.$error.'");</script>';
	}
}
else{
	$id = $_GET['id'];
	$row= $tintuc->detailDanhMuc($id);
    require_once('../views/qldanhmuc/suadanhmuc.php');
}
?>