<?php
$tintuc = new TinTuc;
$arr_loai=$tintuc->getDanhMuc();
$user = new Account;
$user_login = $_SESSION['userdouongonline']; 
if(isset($_POST['btnThem'])==true){ 	
	$tensanpham = trim($_POST["name"]);	
	$mota = trim($_POST["mota"]);	
	$iddanhmuc = trim($_POST["iddanhmuc"]);
	$gia = trim($_POST["gia"]);
    $soluongnhap = trim($_POST["soluongnhap"]);
	
	$image = trim($_FILES['image']['name']);
	$name_link= ChangeToSlugChuan($tensanpham );		
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$edit_time=date('Y-m-d H:i:s');
	$daycreate=date("Y-m-d");
	$active=1;
	$view=0;
	$flag=1; $error = "";
	if ($tensanpham == NULL){$flag=0;$error = "Cần nhập tên SP!";}
	$sql = "SELECT * FROM sanpham WHERE tensanpham = '$tensanpham'";
	if ($sql != NULL){$flag=0;$error = "Đã tồn tại SP!";}
	if ($image != NULL && $flag==1){
		$upload1 = new upload('image'); // upload is name of input
		$upload1->setFileExtension('png|jpg|jpeg|gif|tiff|raw|PNG|JPG|GIF|TIFF|RAW');
		$upload1->setFileSize(10000);
		$dir = '../../img/sanpham/';
		$upload1->setUploadDir($dir);
		if($upload1->isVail()==true){ 
			$flag = 0;
			$error = $upload1->error;
		}
		if($flag){
			$filename = $upload1->upload(false,$image);
		}
	}
	
	if($flag){
		
		
		$tintuc->addSanPham($iddanhmuc,$tensanpham,$name_link,$filename,$mota,$gia,$soluongnhap,$soluongnhap,$user_login,$edit_time,$daycreate,$active,$user_login,$view);
		echo '<script type="text/javascript">alert("Tạo thành công!");window.location ="main.php?act=qlsanpham.html"; </script>';
	}else{
		echo '<script type="text/javascript">alert("'.$error.'");</script>';
	}
}
require_once('../views/qlsanpham/themsanpham.php');
?>