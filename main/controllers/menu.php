<?php
$db1 = new Database;
$xuat = new Xuat;

if (!isset($_GET['act'])){
	$act = "default";
}else{
	$act = $_GET['act'];
}

switch($act){
    case"trang-chu.html":
		require  "main/views/menu/default.php";
		break;
	case"ttsanpham.html":
		require  "main/views/menu/ttsanpham.php";
		break;
	case"gio-hang":
		require  "main/views/menu/giohang.php";
		break;
	case"ct-tin-tuc":
		require  "main/views/menu/tintuc.php";
		break;
	case"tuyen-dung.html":
		require  "main/views/menu/tuyendung.php";
		break;
	case"tuyen-dung":
		require  "main/views/menu/tuyendung.php";
		break;
	case"ct-tuyen-dung":
		require  "main/views/menu/tuyendung.php";
		break;
	case"gioi-thieu":
		require  "main/views/menu/gioithieu.php";
		break;
	case"gioi-thieu.html":
		require  "main/views/menu/gioithieu.php";
		break;
	case"doi-tac.html":
		require  "main/views/menu/doitac.php";
		break;
	case"ct-doi-tac":
		require  "main/views/menu/doitac.php";
		break;
	case"san-pham.html":
		require  "main/views/menu/sanpham.php";
		break;
	case"san-pham":
		require  "main/views/menu/sanpham.php";
		break;
	case"sanphamdm":
		require  "main/views/menu/sanphamdm.php";
		break;
	case"lien-he.html":
		require  "main/views/menu/lienhe.php";
		break;
	default:
     	require  "main/views/menu/default.php";
		break;
}

unset($db1);unset($xuat);

