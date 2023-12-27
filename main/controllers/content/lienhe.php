<?php
$xuat = new Xuat;



// if(isset($_POST['guilienhe'])){
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$info = $_POST['info'];
// 	$daycreate = date("Y-m-d");
	
// 	date_default_timezone_set('Asia/Ho_Chi_Minh');
// 	$edit_time=date('Y-m-d H:i:s');
// 	$active=1;
// 	$flag=1; $error = "";
// 	if($flag){       
					
// 		$xuat->createLienHe($name,$email,$info,$name,$edit_time,$daycreate,$active);
// 		echo '<script type="text/javascript">alert("Gửi thành công!");window.location ="?act=trang-chu.html"; </script>';
// 	}
// 	else{
// 			echo '<script type="text/javascript">alert("'.$error.'");window.location ="?act=lien-he.html"; </script>';
// 	}

// }

require_once("main/views/content/lienhe.php");

unset($xuat);