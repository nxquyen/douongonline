<?php
$tintuc = new TinTuc;
$user = new Account;
$user_login = $_SESSION['userdouongonline']; 
if(isset($_POST['btnThem'])==true){ 	
	$tendanhmuc = trim($_POST["name"]);	
	$mota = trim($_POST["mota"]);	
	$name_link= ChangeToSlugChuan($tendanhmuc );		
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$edit_time=date('Y-m-d H:i:s');
	$daycreate=date("Y-m-d");
	$active=1;
	$flag=1; $error = "";
	if ($tendanhmuc == NULL){$flag=0;$error = "Cần nhập tên Danh Mục!";}
	$sql = "SELECT * FROM danhmuc WHERE tendanhmuc = '$tendanhmuc'";
	if ($sql != NULL){$flag=0;$error = "Đã tồn tại SP!";}
	if($flag){
		$tintuc->addDanhMuc($tendanhmuc,$name_link,$mota,$user_login,$edit_time,$daycreate,$active);
		echo '<script type="text/javascript">alert("Tạo thành công!");window.location ="main.php?act=qldanhmuc.html"; </script>';
	}else{
		echo '<script type="text/javascript">alert("'.$error.'");</script>';
	}
}
require_once('../views/qldanhmuc/themdanhmuc.php');
?>