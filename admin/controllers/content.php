<?php

			if (!isset($_GET['act'])){
				$act = "default";
			}else{
				$act = $_GET['act'];
			}
				
				switch($act)
				{	
					case"qldanhmuc.html":
						require  "qldanhmuc/dsdanhmuc.php";
						break;
					case"qltaikhoan.html":
						require  "qltaikhoan/dstaikhoan.php";
						break;
					case"qlsanpham.html":
						require  "qlsanpham/dssanpham.php";
						break;
					case"qldonhang.html":
						require  "qldonhang/dsdonhang.php";
						break;
					case"qlsanpham":
						require  "qlsanpham/dssanpham.php";
						break;
					/**************san-pham***************/
					case"themsanpham.html":
						require  "qlsanpham/themsanpham.php";
						break;
					case"suasanpham":
						require  "qlsanpham/suasanpham.php";
						break;
					case"ttsanpham.html":
						require  "qlsanpham/ttsanpham.php";
						break;
						case"ttsanpham":
							require  "qlsanpham/ttsanpham.php";
							break;
					case"xoasanpham":
						require  "qlsanpham/xoasanpham.php";
						break;
					/***************danh-muc*****************/
					case"ttdanhmuc":
						require  "qldanhmuc/ttdanhmuc.php";
						break;
					case"themdanhmuc.html":
						require  "qldanhmuc/themdanhmuc.php";
						break;
					case"suadanhmuc":
							require  "qldanhmuc/suadanhmuc.php";
							break;
					case"xoadanhmuc":
							require  "qldanhmuc/xoadanhmuc.php";
							break;
					/***************tai-khoan*****************/
					case"tttaikhoan":
						require  "qltaikhoan/tttaikhoan.php";
						break;
					case"suataikhoan":
							require  "qltaikhoan/suataikhoan.php";
							break;
					case"xoataikhoan":
							require  "qltaikhoan/xoataikhoan.php";
							break;
					/***************don-hang*****************/
					case"duyetdonhang":
						require  "qldonhang/duyetdonhang.php";
						break;
					case"ttdonhang":
							require  "qldonhang/ttdonhang.php";
							break;
					case"huydonhang":
							require  "qldonhang/huydonhang.php";
							break;
					/***************quyen*****************/
					case"quyen.html":
						require  "quyen/quyen.php";
						break;
					case"quyen":
						require  "quyen/quyen.php";
						break;
					case"quyen-edit":
						require  "quyen/quyen_edit.php";
						break;
					case"quyen-detail":
						require  "quyen/quyen_detail.php";
						break;
					case"quyen-delete":
						require  "quyen/quyen_delete.php";
						break;
					
					/**************tin_tuc***************/
					case"tin-tuc.html":
						require  "tin_tuc/tin_tuc.php";
						break;
					case"tin-tuc":
						require  "tin_tuc/tin_tuc.php";
						break;
					case"tin-tuc-add":
						require  "tin_tuc/tin_tuc_add.php";
						break;
					case"tin-tuc-edit":
						require  "tin_tuc/tin_tuc_edit.php";
						break;
					case"tin-tuc-detail":
						require  "tin_tuc/tin_tuc_detail.php";
						break;
					case"tin-tuc-delete":
						require  "tin_tuc/tin_tuc_delete.php";
						break;
					/**************tuyen_dung***************/
					case"tuyen-dung.html":
						require  "tuyen_dung/tuyen_dung.php";
						break;
					case"tuyen-dung":
						require  "tuyen_dung/tuyen_dung.php";
						break;
					case"tuyen-dung-add":
						require  "tuyen_dung/tuyen_dung_add.php";
						break;
					case"tuyen-dung-edit":
						require  "tuyen_dung/tuyen_dung_edit.php";
						break;
					case"tuyen-dung-detail":
						require  "tuyen_dung/tuyen_dung_detail.php";
						break;
					case"tuyen-dung-delete":
						require  "tuyen_dung/tuyen_dung_delete.php";
						break;
					/**************san_pham***************/
					case"san-pham.html":
						require  "qlsanpham/san_pham.php";
						break;
					case"san-pham":
						require  "san_pham/san_pham.php";
						break;
					case"san-pham-add":
						require  "san_pham/san_pham_add.php";
						break;
					case"san-pham-edit":
						require  "san_pham/san_pham_edit.php";
						break;
					case"san-pham-detail":
						require  "san_pham/san_pham_detail.php";
						break;
					case"san-pham-delete":
						require  "san_pham/san_pham_delete.php";
						break;
					case"san-pham-anh":
						require  "san_pham/san_pham_anh.php";
						break;
					case"danh-sach-anh-sp":
						require  "san_pham/danh_sach_anh_sp.php";
						break;
					case"danh-sach-anh-sp-delete":
						require  "san_pham/danh_sach_anh_sp_delete.php";
						break;
						
						
					/**************gioi_thieu***************/
					case"gioi-thieu.html":
						require  "gioi_thieu/gioi_thieu.php";
						break;
					case"gioi-thieu":
						require  "gioi_thieu/gioi_thieu.php";
						break;
					case"gioi-thieu-add":
						require  "gioi_thieu/gioi_thieu_add.php";
						break;
					case"gioi-thieu-edit":
						require  "gioi_thieu/gioi_thieu_edit.php";
						break;
					case"gioi-thieu-detail":
						require  "gioi_thieu/gioi_thieu_detail.php";
						break;
					case"gioi-thieu-delete":
						require  "gioi_thieu/gioi_thieu_delete.php";
						break;
					// Quan ly Tai khoan
					case "tai-khoan.html":
						require  "users/users.php";
						break;
					case "tai-khoan":
						require  "users/users.php";
						break;
					case "tai-khoan-detail":
						require  "users/users_detail.php";
						break;
					case "doi-mat-khau.html":
						require  "users/change_pass.php";
						break;
					case "tai-khoan-add":
						require  "users/users_add.php";
						break;
					case "tai-khoan-edit":
						require  "users/users_edit.php";
						break;
					case "tai-khoan-delete":
						require  "users/users_delete.php";
						break;
					
					//slide_main
					case"slide.html":
						require  "slide/slide.php";
						break;
					case"slide":
						require  "slide/slide.php";
						break;
					case"slide-edit":
						require  "slide/slide_edit.php";
						break;
					case"slide-detail":
						require  "slide/slide_detail.php";
						break;
					case"slide-delete":
						require  "slide/slide_delete.php";
						break;
					/********************************video***************/
					case"video":
						require  "video/video.php";
						break;
					case"video.html":
						require  "video/video.php";
						break;
					case"video-edit":
						require  "video/video_edit.php";
						break;
					case"video-detail":
						require  "video/video_detail.php";
						break;
					case"video-delete":
						require  "video/video_delete.php";
						break;
					/********************************hinh-dang-bai***************/
					case"hinh-dang-bai":
						require  "hinh_dang_bai/hinh_dang_bai.php";
						break;
					case"hinh-dang-bai.html":
						require  "hinh_dang_bai/hinh_dang_bai.php";
						break;
					case"hinh-dang-bai-edit":
						require  "hinh_dang_bai/hinh_dang_bai_edit.php";
						break;
					case"hinh-dang-bai-detail":
						require  "hinh_dang_bai/hinh_dang_bai_detail.php";
						break;
					case"hinh-dang-bai-delete":
						require  "hinh_dang_bai/hinh_dang_bai_delete.php";
						break;
					case"hinh-dang-bai-add":
						require  "hinh_dang_bai/hinh_dang_bai_add.php";
						break;
					/*****************************doi-tac************************/
					case "doi-tac":
						require  "doi_tac/doi_tac.php";
						break;
					case "doi-tac.html":
						require  "doi_tac/doi_tac.php";
						break;
					case "doi-tac-add":
						require  "doi_tac/doi_tac_add.php";
						break;						
					case "doi-tac-detail":
						require  "doi_tac/doi_tac_detail.php";
						break;
					case "doi-tac-edit":
						require  "doi_tac/doi_tac_edit.php";
						break;
					case "doi-tac-delete":
						require  "doi_tac/doi_tac_delete.php";
						break;	
						
					case "trang-chu.html":
						require  "../views/wellcome.php";
						break;
					default:
						require  "../views/wellcome.php";
						break;
				}