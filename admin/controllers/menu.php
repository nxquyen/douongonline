<?php
 
			if (!isset($_GET['act'])) $act = "default";
				else $act = $_GET['act'];
				
				switch($act)
				{
					/************group-user*****/
					
					case"slide.html":
						require  "../views/menu/slide.php";
						break;
					case"slide-edit":
						require  "../views/menu/slide.php";
						break;
					case"slide-detail":
						require  "../views/menu/slide.php";
						break;
					case"hinh-dang-bai.html":
						require  "../views/menu/hinhdangbai.php";
						break;
					case"hinh-dang-bai-detail":
						require  "../views/menu/hinhdangbai.php";
						break;
					case"hinh-dang-bai-edit":
						require  "../views/menu/hinhdangbai.php";
						break;
					case"video.html":
						require  "../views/menu/video.php";
						break;
					case"video-detail":
						require  "../views/menu/video.php";
						break;
					case"video-edit":
						require  "../views/menu/video.php";
						break;
					case"doi-tac.html":
						require  "../views/menu/doitac.php";
						break;
					case"doi-tac-edit":
						require  "../views/menu/doitac.php";
						break;
					case"doi-tac-detail":
						require  "../views/menu/doitac.php";
						break;
					case"doi-tac-add":
						require  "../views/menu/doitac.php";
						break;
					case"khach-hang.html":
						require  "../views/menu/khachhang.php";
						break;
					case"khach-hang-edit":
						require  "../views/menu/khachhang.php";
						break;
					case"khach-hang-detail":
						require  "../views/menu/khachhang.php";
						break;
					case"khach-hang-add":
						require  "../views/menu/khachhang.php";
						break;
					case"tin-tuc.html":
						require  "../views/menu/tintuc.php";
						break;
					case"tin-tuc-edit":
						require  "../views/menu/tintuc.php";
						break;
					case"tin-tuc-detail":
						require  "../views/menu/tintuc.php";
						break;
					case"tin-tuc-add":
						require  "../views/menu/tintuc.php";
						break;
					case"loai-san-pham.html":
						require  "../views/menu/loaisanpham.php";
						break;
					case"loai-san-pham-detail":
						require  "../views/menu/loaisanpham.php";
						break;
					case"loai-san-pham-edit":
						require  "../views/menu/loaisanpham.php";
						break;
					case"gioi-thieu.html":
						require  "../views/menu/gioithieu.php";
						break;
					case"gioi-thieu-edit":
						require  "../views/menu/gioithieu.php";
						break;
					case"gioi-thieu-detail":
						require  "../views/menu/gioithieu.php";
						break;
					case"gioi-thieu-add":
						require  "../views/menu/gioithieu.php";
						break;
					
					case"tai-khoan.html":
						require  "../views/menu/thongtinnguoidung.php";
						break;
					case"tai-khoan-edit":
						require  "../views/menu/thongtinnguoidung.php";
						break;
					case"tai-khoan-detail":
						require  "../views/menu/thongtinnguoidung.php";
						break;
					case"ttai-khoan-add":
						require  "../views/menu/thongtinnguoidung.php";
						break;
					case"change-pass":
						require  "../views/menu/changepass.php";
						break;
					case"quyen.html":
						require  "../views/menu/quyen.php";
						break;
					case"quyen-detail":
						require  "../views/menu/quyen.php";
						break;
					case"quyen-edit":
						require  "../views/menu/quyen.php";
						break;
					case"lien-he.html":
						require  "../views/menu/lienhe.php";
						break;
					
					case"tuyen-dung.html":
						require  "../views/menu/tuyendung.php";
						break;
					case"tuyen-dung-edit":
						require  "../views/menu/tuyendung.php";
						break;
					case"tuyen-dung-detail":
						require  "../views/menu/tuyendung.php";
						break;
					case"tuyen-dung-add":
						require  "../views/menu/tuyendung.php";
						break;
					case"san-pham.html":
						require  "../views/menu/sanpham.php";
						break;
					case"san-pham-edit":
						require  "../views/menu/sanpham.php";
						break;
					case"san-pham-detail":
						require  "../views/menu/sanpham.php";
						break;
					case"qlsanpham.html":
						require  "../views/menu/qlsanpham.php";
						break;
					case"qldonhang.html":
						require  "../views/menu/qldonhang.php";
						break;
					case"qltaikhoan.html":
						require  "../views/menu/qltaikhoan.php";
						break;
					case"qldanhmuc.html":
						require  "../views/menu/qldanhmuc.php";
						break;
					//images	
					
					// Mac dinh Trang Chu
					default:
     				 require  "../views/menu/default.php";
					break;

				}