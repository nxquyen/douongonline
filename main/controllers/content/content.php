<?php
if (!isset($_GET['act'])){
	$act = "default";
}else{
	$act = $_GET['act'];
}

switch($act){	
	
	
	case"trang-chu.html":
		require  "main/controllers/content/trangchu.php";
		break;
	case"gio-hang.html":
		require  "main/controllers/content/giohang.php";
		break;
	case"gio-hang":
		require  "main/controllers/content/giohang.php";
		break;
	case"tin-tuc":
		require  "main/controllers/content/tintuc.php";
		break;
	case"ct-tin-tuc":
		require  "main/controllers/content/cttintuc.php";
		break;
	case"tuyen-dung.html":
		require  "main/controllers/content/tuyendung.php";
		break;
	case"ttsanpham":
		require  "main/controllers/content/ttsanpham.php";
		break;
	case"ct-tuyen-dung":
		require  "main/controllers/content/cttuyendung.php";
		break;
	case"album.html":
		require  "main/controllers/content/album.php";
		break;
	case"ct-album":
		require  "main/controllers/content/ctalbum.php";
		break;
	case"doi-tac.html":
		require  "main/controllers/content/doitac.php";
		break;
	case"ct-doi-tac":
		require  "main/controllers/content/ctdoitac.php";
		break;
	case"lienhe.html":
		require  "main/controllers/content/lienhe.php";
		break;
	case"gioi-thieu.html":
		require  "main/controllers/content/gioithieu.php";
		break;
	case"thong-tin-san-pham":
		require  "main/controllers/content/ctsanpham.php";
		break;
	case"sanphamdm":
		require  "main/controllers/content/sanphamdm.php";
		break;
	case"san-pham":
		require  "main/controllers/content/sanpham.php";
		break;
	case"gioi-hang.html":
		require  "main/controllers/content/giohang.php";
		break;
	default:
     	require  "main/controllers/content/trangchu.php";
		break;
}


