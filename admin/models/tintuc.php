<?php
class TinTuc extends Database{
	var $user;
	var $error;

    function __construct() {
        parent::connect();
    }
     
    function __destruct() {
        parent::dis_connect();
    }
	/***********************Danh muc**********************/
	public function dsdanhmuc($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM  danhmuc ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM  danhmuc ORDER BY id  LIMIT ".$start.", ".$limit;
		}
		
		return $this->get_list($sql);
	}
	
	public function getDanhMuc(){
		$sql = "SELECT * FROM  danhmuc ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addDanhMuc($tendanhmuc,$name_link,$mota,$user_login,$edit_time,$daycreate,$active){
			$sql = "INSERT INTO  danhmuc (tendanhmuc,mota,name_link,edit_user,edit_time,daycreate,active) 
			VALUES ('$tendanhmuc','$mota','$name_link','$user_login','$edit_time','$daycreate','$active')";
			
			$this->do_sql($sql);
			return true;
	}
	public function detailDanhMuc($id){
		$sql = "SELECT * FROM  danhmuc WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editDanhMuc($id,$tendanhmuc,$name_link,$mota,$edit_user,$edit_time){
		if ($tendanhmuc != NULL){$this->do_sql("UPDATE  danhmuc SET tendanhmuc='$tendanhmuc' WHERE id='$id'");}
		if ($mota != NULL){$this->do_sql("UPDATE  danhmuc SET mota='$mota' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE  danhmuc SET name_link='$name_link' WHERE id='$id'");}
		{$this->do_sql("UPDATE danhmuc SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE  danhmuc SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteDanhMuc($id){	
		$sql = "DELETE FROM  danhmuc WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
/*************san pham*************************/
public function dssanpham($start,$limit){
	if($start==0 && $limit==0){
		$sql = "SELECT * FROM sanpham ORDER BY id DESC";
	}else{
		$sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT ".$start.", ".$limit;
	}
	return $this->get_list($sql);
}

public function getSanPham(){
	$sql = "SELECT * FROM sanpham ORDER BY id DESC";
	return $this->get_list($sql);
}
public function addSanPham($iddanhmuc,$tensanpham,$name_link,$image,$mota,$gia,$soluongnhap,$soluongton,$edit_user,$edit_time,$daycreate,$active,$usercreate,$view){
	$sql = "INSERT INTO sanpham (id_danhmuc,tensanpham,name_link,hinhanh,mota,giaca,soluongnhap,soluongton,edit_user,edit_time,daycreate,active,usercreate,view) 
	VALUES ('$iddanhmuc','$tensanpham','$name_link','$image','$mota','$gia','$soluongnhap','$soluongton','$edit_user','$edit_time','$daycreate','$active','$usercreate','$view')";
	$this->do_sql($sql);
	return true;
}

public function detailSanPham($id){
	$sql = "SELECT * FROM sanpham WHERE id='$id'";
	return $this->get_row($sql);
}
public function editSanPham($id,$iddanhmuc,$tensanpham,$name_link,$image,$mota,$gia,$soluongnhap,$soluongton,$edit_user,$edit_time){
	if ($tensanpham != NULL){$this->do_sql("UPDATE sanpham SET tensanpham='$tensanpham' WHERE id='$id'");}
	if ($iddanhmuc != NULL){$this->do_sql("UPDATE sanpham SET id_danhmuc='$iddanhmuc' WHERE id='$id'");}
	if ($name_link != NULL){$this->do_sql("UPDATE sanpham SET name_link='$name_link' WHERE id='$id'");}
	if ($image != NULL){$this->do_sql("UPDATE sanpham SET hinhanh='$image' WHERE id='$id'");}
	if ($soluongnhap != NULL){$this->do_sql("UPDATE sanpham SET soluongnhap='$soluongnhap' WHERE id='$id'");}
	if ($soluongton != NULL) {$this->do_sql("UPDATE sanpham SET soluongton='$soluongton' WHERE id='$id'");}
	if ($gia != NULL)	{$this->do_sql("UPDATE sanpham SET giaca='$gia' WHERE id='$id'");}
	if ($mota != NULL) {$this->do_sql("UPDATE sanpham SET mota='$mota' WHERE id='$id'");}
	{$this->do_sql("UPDATE sanpham SET edit_user='$edit_user' WHERE id='$id'");}
	if ($edit_time != NULL)	{$this->do_sql("UPDATE sanpham SET edit_time='$edit_time' WHERE id='$id'");}
	return TRUE;
}

public function deleteSanPham($id){	
	$sql = "DELETE FROM sanpham WHERE id='$id'";
	$this->do_sql($sql);
	return TRUE;
}
	/***********************taikhoan**********************/
	public function dstaikhoan($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM users ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM users ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function detailTaiKhoan($id){
		$sql = "SELECT * FROM users WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editTaiKhoan($id,$tendangnhap,$matkhau,$edit_user,$edit_time){
		if ($tendangnhap != NULL){$this->do_sql("UPDATE users SET username='$tendangnhap' WHERE id='$id'");}
		if ($matkhau != NULL){$this->do_sql("UPDATE users SET password='$matkhau' WHERE id='$id'");}
		{$this->do_sql("UPDATE users SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE users SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	public function deleteTaiKhoan($id){	
		$sql = "DELETE FROM users WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/***********************donhang**********************/
	public function dsdonhang($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM donhang ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM donhang ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function detailDonHang($id){
		$sql = "SELECT * FROM donhang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function ThongtinKhachHang($id){
		$sql = "SELECT * FROM users WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function dsdonhangSP($id_dh){
		
			$sql = "SELECT * FROM ctdonhang WHERE id_dh='$id_dh' ORDER BY id DESC";
		
		return $this->get_list($sql);
	}
	public function DuyetDonHang($id,$tinhtrang){
		if ($tinhtrang != NULL){$this->do_sql("UPDATE donhang SET tinhtrang='$tinhtrang' WHERE id='$id'");}
		return TRUE;
	}
	public function deleteDonHang($id){	
		$sql = "DELETE FROM donhang WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function getNameKhachHang($id){
		$sql = "SELECT * FROM users WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/***********************quyen**********************/
	public function ListQuyen(){
		$sql = "SELECT * FROM quyen ORDER BY id";
		return $this->get_list($sql);
	}
	public function Quyen($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM quyen ORDER BY id";
		}else{
			$sql = "SELECT * FROM quyen ORDER BY id  LIMIT ".$start.", ".$limit;
		}
		
		return $this->get_list($sql);
	}
	public function addQuyen($name,$name_link,$mota,$edit_user,$edit_time,$daycreate,$active){
			$sql = "INSERT INTO quyen (name,name_link,mota,edit_user,edit_time,daycreate,active) 
			VALUES ('$name','$name_link','$mota','$edit_user','$edit_time','$daycreate','$active')";
			
			$this->do_sql($sql);
			return true;
	}
	public function detailQuyen($id){
		$sql = "SELECT * FROM quyen WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editQuyen($id,$name,$name_link,$mota,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE quyen SET name='$name' WHERE id='$id'");}
		if ($mota != NULL){$this->do_sql("UPDATE quyen SET mota='$mota' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE quyen SET name_link='$name_link' WHERE id='$id'");}
		{$this->do_sql("UPDATE quyen SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE quyen SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteQuyen($id){	
		$sql = "DELETE FROM quyen WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function nameQuyen($id){
		$sql = "SELECT * FROM quyen WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/***********************Hinhdangbai**********************/
	public function HinhDangBai($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM  images ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM  images ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		
		return $this->get_list($sql);
	}
	public function ListHinhDangBai(){
		$sql = "SELECT * FROM  images ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHinhDangBai($link,$edit_user,$edit_time,$daycreate,$active){
			$sql = "INSERT INTO  images (link,edit_user,edit_time,daycreate,active) 
			VALUES ('$link','$edit_user','$edit_time','$daycreate','$active')";
			
			$this->do_sql($sql);
			return true;
	}
	public function detailHinhDangBai($id){
		$sql = "SELECT * FROM  images WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHinhDangBai($id,$link,$edit_user,$edit_time){
		if ($link != NULL){$this->do_sql("UPDATE  images SET link='$link' WHERE id='$id'");}
		{$this->do_sql("UPDATE  images SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE  images SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteHinhDangBai($id){	
		$sql = "DELETE FROM  images WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	
	/***********************Slide**********************/
	public function Slide($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM slide";
		}else{
			$sql = "SELECT * FROM slide ORDER BY numbers LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
		
	public function addSlide($image,$link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO slide (image,link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$image','$link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteSlide($id){
		$sql = "DELETE FROM slide WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function editSlide($id,$image,$link,$edit_user,$edit_time,$numbers){
		if ($image != NULL){$this->do_sql("UPDATE slide SET image='$image' WHERE id='$id'");}
		if ($link != NULL){$this->do_sql("UPDATE slide SET link='$link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE slide SET numbers='$numbers' WHERE id='$id'");}
		$this->do_sql("UPDATE slide SET edit_user='$edit_user' WHERE id='$id'");
		$this->do_sql("UPDATE slide SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function detailSlide($id){
		$sql = "SELECT * FROM slide WHERE id='$id'";
		return $this->get_row($sql);
	}
	
	public function detailImageSlide($id){
		$sql = "SELECT * FROM slide WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['image'];
	}
	
	public function checkImageNameSlide($img){
		$sql = "SELECT image FROM slide WHERE image='$img'";
		$result =$this->do_sql($sql);
		if(mysqli_num_rows($result)<=0){
			return FALSE;
		}else{
			return TRUE;
		}           
	}
	
	/***********************images**********************/
	public function HinhHoatDong($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM anhhoatdong ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM anhhoatdong ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
		
	public function addHinhHoatDong($idloai,$link,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO anhhoatdong (idalbum,link,edit_user,edit_time,daycreate,active) 
		VALUES ('$idloai','$link','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteHinhHoatDong($id){
		$sql = "DELETE FROM anhhoatdong WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function editHinhHoatDong($id,$idloai,$link,$edit_user,$edit_time){
		if ($link != NULL){$this->do_sql("UPDATE anhhoatdong SET link='$link' WHERE id='$id'");}
		if ($idloai != NULL){$this->do_sql("UPDATE anhhoatdong SET idalbum='$idloai' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE anhhoatdong SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE anhhoatdong SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function detailHinhHoatDong($id){
		$sql = "SELECT * FROM anhhoatdong WHERE id='$id'";
		return $this->get_row($sql);
	}
	
	public function getHinhHoatDong($id){
		$sql = "SELECT * FROM anhhoatdong WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['link'];
	}
	
	public function checkHinhHoatDong($img){
		$sql = "SELECT link FROM anhhoatdong WHERE link='$img'";
		$result =$this->do_sql($sql);
		if(mysqli_num_rows($result)<=0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	
	/**************************video**********************/
	public function Video($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM video ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM video ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
		
	public function addVideo($name,$name_link,$link,$edit_user,$edit_time,$view,$daycreate,$active){
		$sql = "INSERT INTO video (name,name_link,link,edit_user,edit_time,view,daycreate,active) 
		VALUES ('$name','$name_link','$link','$edit_user','$edit_time','$view','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteVideo($id){
		$sql = "DELETE FROM video WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateVideo($id,$name,$name_link,$link,$thutu,$loai,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE video SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE video SET name_link='$name_link' WHERE id='$id'");}
		if ($loai != NULL){$this->do_sql("UPDATE video SET loai='$loai' WHERE id='$id'");}
		if ($link != NULL){$this->do_sql("UPDATE video SET link='$link' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE video SET thutu='$thutu' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE video SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE video SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailVideo($id){
		$sql = "SELECT * FROM video WHERE id='$id'";
		return $this->get_row($sql);
	}
	

	
	
	
	/*************tintuc*************************/
	public function TinTuc($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM tintuc ORDER BY thutu DESC";
		}else{
			$sql = "SELECT * FROM tintuc ORDER BY thutu DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getTinTuc(){
		$sql = "SELECT * FROM tintuc ORDER BY thutu DESC";
		return $this->get_list($sql);
	}
	public function addTinTuc($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO tintuc (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailTinTuc($id){
		$sql = "SELECT * FROM tintuc WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editTinTuc($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE tintuc SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE tintuc SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE tintuc SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE tintuc SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE tintuc SET info='$info' WHERE id='$id'");}
		if ($thutu != NULL)	{$this->do_sql("UPDATE tintuc SET thutu='$thutu' WHERE id='$id'");}
		{$this->do_sql("UPDATE tintuc SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE tintuc SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteTinTuc($id){	
		$sql = "DELETE FROM tintuc WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	/*************anhsanpham*************************/
	
	public function getAnhSanPham($idsanpham){
		$sql = "SELECT * FROM anhsanpham WHERE idsanpham='$idsanpham' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	
	public function addAnhSanPham($idsanpham,$image,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO  anhsanpham (idsanpham,image,edit_user,edit_time,daycreate,active) 
		VALUES ('$idsanpham','$image','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function detailAnhSanPham($id){
		$sql = "SELECT * FROM  anhsanpham WHERE id='$id'";
		return $this->get_row($sql);
	}
	
	
	public function deleteAnhSanPham($id){	
		$sql = "DELETE FROM  anhsanpham WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************thongbao*************************/
	public function ThongBao($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM thongbao ORDER BY thutu DESC";
		}else{
			$sql = "SELECT * FROM thongbao ORDER BY thutu DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function ListThongBao(){
		$sql = "SELECT * FROM thongbao ORDER BY thutu DESC";
		return $this->get_list($sql);
	}
	public function addThongBao($idloai,$name,$name_link,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO thongbao (idloai,name,name_link,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$idloai','$name','$name_link','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailThongBao($id){
		$sql = "SELECT * FROM thongbao WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editThongBao($id, $idloai,$name,$name_link,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($idloai != NULL){$this->do_sql("UPDATE thongbao SET idloai='$idloai' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE thongbao SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE thongbao SET name_link='$name_link' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE thongbao SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE thongbao SET info='$info' WHERE id='$id'");}
		if ($thutu != NULL)	{$this->do_sql("UPDATE thongbao SET thutu='$thutu' WHERE id='$id'");}
		{$this->do_sql("UPDATE thongbao SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE thongbao SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteThongBao($id){	
		$sql = "DELETE FROM thongbao WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}

	
	/*************Gioithieu*************************/
	public function GioiThieu($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM gioithieu ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM gioithieu ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function ListGioiThieu(){
		$sql = "SELECT * FROM gioithieu ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addGioiThieu($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO gioithieu (name,name_link,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailGioiThieu($id){
		$sql = "SELECT * FROM gioithieu WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGioiThieu($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE gioithieu SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE gioithieu SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE gioithieu SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE gioithieu SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE gioithieu SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteGioiThieu($id){	
		$sql = "DELETE FROM gioithieu WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************doitac*************************/
	public function DoiTac($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM doitac ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM doitac ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getDoiTac(){
		$sql = "SELECT * FROM doitac ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addDoiTac($name,$name_link,$image,$logo,$link,$short_info,$info,$phone,$email,$address,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO doitac (name,name_link,image,logo,link,short_info,info,phone,email,address,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$logo','$link','$short_info','$info','$phone','$email','$address','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailDoiTac($id){
		$sql = "SELECT * FROM doitac WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editDoiTac($id,$name,$name_link,$image,$logo,$link,$short_info,$info,$phone,$email,$address,$edit_user,$edit_time){
		if ($phone != NULL){$this->do_sql("UPDATE doitac SET phone='$phone' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE doitac SET name='$name' WHERE id='$id'");}
		if ($logo != NULL){$this->do_sql("UPDATE doitac SET logo='$logo' WHERE id='$id'");}
		if ($link != NULL){$this->do_sql("UPDATE doitac SET link='$link' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE doitac SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE doitac SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE doitac SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE doitac SET info='$info' WHERE id='$id'");}
		if ($email != NULL)	{$this->do_sql("UPDATE doitac SET email='$email' WHERE id='$id'");}
		if ($address != NULL)	{$this->do_sql("UPDATE doitac SET address='$address' WHERE id='$id'");}
		{$this->do_sql("UPDATE doitac SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE doitac SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteDoiTac($id){	
		$sql = "DELETE FROM doitac WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************tuyendung*************************/
	public function TuyenDung($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM tuyendung ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM tuyendung ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getTuyenDung(){
		$sql = "SELECT * FROM tuyendung ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addTuyenDung($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO tuyendung (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailTuyenDung($id){
		$sql = "SELECT * FROM tuyendung WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editTuyenDung($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE tuyendung SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE tuyendung SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE tuyendung SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE tuyendung SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE tuyendung SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE tuyendung SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE tuyendung SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE tuyendung SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteTuyenDung($id){	
		$sql = "DELETE FROM tuyendung WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************ngoaikhoa*************************/
	public function NgoaiKhoa($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM ngoaikhoa ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM ngoaikhoa ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNgoaiKhoa(){
		$sql = "SELECT * FROM ngoaikhoa ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addNgoaiKhoa($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO ngoaikhoa (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNgoaiKhoa($id){
		$sql = "SELECT * FROM ngoaikhoa WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editNgoaiKhoa($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE ngoaikhoa SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE ngoaikhoa SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE ngoaikhoa SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE ngoaikhoa SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE ngoaikhoa SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE ngoaikhoa SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE ngoaikhoa SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE ngoaikhoa SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteNgoaiKhoa($id){	
		$sql = "DELETE FROM ngoaikhoa WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************GocSinhVien*************************/
	public function GocSinhVien($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM gocsinhvien ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM gocsinhvien ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getGocSinhVien(){
		$sql = "SELECT * FROM gocsinhvien ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addGocSinhVien($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO gocsinhvien (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailGocSinhVien($id){
		$sql = "SELECT * FROM gocsinhvien WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGocSinhVien($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE gocsinhvien SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE gocsinhvien SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE gocsinhvien SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE gocsinhvien SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE gocsinhvien SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE gocsinhvien SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE gocsinhvien SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE gocsinhvien SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteGocSinhVien($id){	
		$sql = "DELETE FROM gocsinhvien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************HoTro*************************/
	public function HoTro($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hotro ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hotro ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHoTro(){
		$sql = "SELECT * FROM hotro ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHoTro($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO hotro (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailHoTro($id){
		$sql = "SELECT * FROM hotro WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHoTro($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE hotro SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE hotro SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE hotro SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE hotro SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE hotro SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE hotro SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE hotro SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE hotro SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteHoTro($id){	
		$sql = "DELETE FROM hotro WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************QuanHeLienLac*************************/
	public function QuanHeLienLac($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM quanhelienlac ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM quanhelienlac ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getQuanHeLienLac(){
		$sql = "SELECT * FROM quanhelienlac ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addQuanHeLienLac($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO quanhelienlac (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailQuanHeLienLac($id){
		$sql = "SELECT * FROM quanhelienlac WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editQuanHeLienLac($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE quanhelienlac SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE quanhelienlac SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE quanhelienlac SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE quanhelienlac SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE quanhelienlac SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE quanhelienlac SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE quanhelienlac SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE quanhelienlac SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteQuanHeLienLac($id){	
		$sql = "DELETE FROM quanhelienlac WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************HoatDongSuKien*************************/
	public function HoatDongSuKien($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hoatdongsukien ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hoatdongsukien ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHoatDongSuKien(){
		$sql = "SELECT * FROM hoatdongsukien ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHoatDongSuKien($name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO hoatdongsukien (name,name_link,image,short_info,info,thutu,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$thutu','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailHoatDongSuKien($id){
		$sql = "SELECT * FROM hoatdongsukien WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHoatDongSuKien($id,$name,$name_link,$image,$short_info,$info,$thutu,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE hoatdongsukien SET name='$name' WHERE id='$id'");}
		if ($thutu != NULL){$this->do_sql("UPDATE hoatdongsukien SET thutu='$thutu' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE hoatdongsukien SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE hoatdongsukien SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE hoatdongsukien SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE hoatdongsukien SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE hoatdongsukien SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE hoatdongsukien SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteHoatDongSuKien($id){	
		$sql = "DELETE FROM hoatdongsukien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************sinhvien*************************/
	public function SinhVien($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sinhvien ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM sinhvien ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getSinhVien(){
		$sql = "SELECT * FROM sinhvien ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addSinhVien($idnganh,$name,$name_link,$image,$short_info,$info,$lop,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO sinhvien (idnganh,name,name_link,image,short_info,info,lop,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$idnganh','$name','$name_link','$image','$short_info','$info','$lop','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailSinhVien($id){
		$sql = "SELECT * FROM sinhvien WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editSinhVien($id, $idnganh,$name,$name_link,$image,$short_info,$info,$lop,$edit_user,$edit_time){
		if ($idnganh != NULL){$this->do_sql("UPDATE sinhvien SET idnganh='$idnganh' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE sinhvien SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE sinhvien SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE sinhvien SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE sinhvien SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE sinhvien SET info='$info' WHERE id='$id'");}
		if ($lop != NULL)	{$this->do_sql("UPDATE sinhvien SET lop='$lop' WHERE id='$id'");}
		{$this->do_sql("UPDATE sinhvien SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE sinhvien SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteSinhVien($id){	
		$sql = "DELETE FROM sinhvien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************cuusinhvien*************************/
	public function CuuSinhVien($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM cuusinhvien ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM cuusinhvien ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getCuuSinhVien(){
		$sql = "SELECT * FROM cuusinhvien ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addCuuSinhVien($idnganh,$name,$name_link,$image,$short_info,$info,$chucvu,$donvi,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO cuusinhvien (idnganh,name,name_link,image,short_info,info,chucvu,donvi,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$idnganh','$name','$name_link','$image','$short_info','$info','$chucvu','$donvi','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailCuuSinhVien($id){
		$sql = "SELECT * FROM cuusinhvien WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editCuuSinhVien($id, $idnganh,$name,$name_link,$image,$short_info,$info,$chucvu,$donvi,$edit_user,$edit_time){
		if ($idnganh != NULL){$this->do_sql("UPDATE cuusinhvien SET idnganh='$idnganh' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE cuusinhvien SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE cuusinhvien SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE cuusinhvien SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE cuusinhvien SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE cuusinhvien SET info='$info' WHERE id='$id'");}
		if ($chucvu != NULL)	{$this->do_sql("UPDATE cuusinhvien SET chucvu='$chucvu' WHERE id='$id'");}
		if ($donvi != NULL)	{$this->do_sql("UPDATE cuusinhvien SET donvi='$donvi' WHERE id='$id'");}
		{$this->do_sql("UPDATE cuusinhvien SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE cuusinhvien SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteCuuSinhVien($id){	
		$sql = "DELETE FROM cuusinhvien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************giangvien*************************/
	public function GiangVien($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM giangvien ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM giangvien ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getGiangVien(){
		$sql = "SELECT * FROM giangvien ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addGiangVien($name,$name_link,$image,$email,$info,$chuyennganh,$mongiangday,$hochamhocvi,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO giangvien (name,name_link,image,email,info,chuyennganh,mongiangday,hochamhocvi,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$image','$email','$info','$chuyennganh','$mongiangday','$hochamhocvi','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailGiangVien($id){
		$sql = "SELECT * FROM giangvien WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGiangVien($id,$name,$name_link,$image,$email,$info,$chuyennganh,$mongiangday,$hochamhocvi,$edit_user,$edit_time){
		if ($email != NULL){$this->do_sql("UPDATE giangvien SET email='$email' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE giangvien SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE giangvien SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE giangvien SET image='$image' WHERE id='$id'");}
		if ($chuyennganh != NULL){$this->do_sql("UPDATE giangvien SET chuyennganh='$chuyennganh' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE giangvien SET info='$info' WHERE id='$id'");}
		if ($mongiangday != NULL)	{$this->do_sql("UPDATE giangvien SET mongiangday='$mongiangday' WHERE id='$id'");}
		if ($hochamhocvi != NULL)	{$this->do_sql("UPDATE giangvien SET hochamhocvi='$hochamhocvi' WHERE id='$id'");}
		{$this->do_sql("UPDATE giangvien SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE giangvien SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteGiangVien($id){	
		$sql = "DELETE FROM giangvien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************hoi-dap*************************/
	public function HoiDap($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hoidap ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hoidap ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHoiDap(){
		$sql = "SELECT * FROM hoidap ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHoiDap($idloai,$cauhoi,$traloi,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO hoidap (idloai,cauhoi,traloi,edit_user,edit_time,daycreate,active) 
		VALUES ('$idloai','$cauhoi','$traloi','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailHoiDap($id){
		$sql = "SELECT * FROM hoidap WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHoiDap($id,$idloai,$cauhoi,$traloi,$edit_user,$edit_time){
		if ($idloai != NULL){$this->do_sql("UPDATE hoidap SET idloai='$idloai' WHERE id='$id'");}
		if ($cauhoi != NULL){$this->do_sql("UPDATE hoidap SET cauhoi='$cauhoi' WHERE id='$id'");}
		if ($traloi != NULL){$this->do_sql("UPDATE hoidap SET traloi='$traloi' WHERE id='$id'");}
		{$this->do_sql("UPDATE hoidap SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE hoidap SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteHoiDap($id){	
		$sql = "DELETE FROM hoidap WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************QuyChe*************************/
	public function QuyChe($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM quychetuyensinh ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM quychetuyensinh ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getQuyChe(){
		$sql = "SELECT * FROM quychetuyensinh ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addQuyChe($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO quychetuyensinh (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailQuyChe($id){
		$sql = "SELECT * FROM quychetuyensinh WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editQuyChe($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE quychetuyensinh SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE quychetuyensinh SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE quychetuyensinh SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE quychetuyensinh SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE quychetuyensinh SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteQuyChe($id){	
		$sql = "DELETE FROM quychetuyensinh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}

	/*************VLVH*************************/
	public function VuaLamVuaHoc($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM vlvh ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM vlvh ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getVuaLamVuaHoc(){
		$sql = "SELECT * FROM vlvh ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addVuaLamVuaHoc($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO vlvh (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailVuaLamVuaHoc($id){
		$sql = "SELECT * FROM vlvh WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editVuaLamVuaHoc($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE vlvh SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE vlvh SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE vlvh SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE vlvh SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE vlvh SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteVuaLamVuaHoc($id){	
		$sql = "DELETE FROM vlvh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************VLVH*************************/
	public function ThacSi($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM thacsi ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM thacsi ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getThacSi(){
		$sql = "SELECT * FROM thacsi ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addThacSi($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO thacsi (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailThacSi($id){
		$sql = "SELECT * FROM thacsi WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editThacSi($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE thacsi SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE thacsi SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE thacsi SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE thacsi SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE thacsi SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteThacSi($id){	
		$sql = "DELETE FROM thacsi WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************NganHan*************************/
	public function NganHan($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM nganhan ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM nganhan ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNganHan(){
		$sql = "SELECT * FROM nganhan ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addNganHan($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$sql = "INSERT INTO nganhan (name,name_link,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNganHan($id){
		$sql = "SELECT * FROM nganhan WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editNganHan($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE nganhan SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE nganhan SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE nganhan SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE nganhan SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE nganhan SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteNganHan($id){	
		$sql = "DELETE FROM nganhan WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************TuXa*************************/
	public function TuXa($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM tuxa ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM tuxa ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getTuXa(){
		$sql = "SELECT * FROM tuxa ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addTuXa($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO tuxa (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailTuXa($id){
		$sql = "SELECT * FROM tuxa WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editTuXa($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE tuxa SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE tuxa SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE tuxa SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE tuxa SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE tuxa SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteTuXa($id){	
		$sql = "DELETE FROM tuxa WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************QuocTe*************************/
	public function QuocTe($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM daotaoquocte ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM daotaoquocte ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getQuocTe(){
		$sql = "SELECT * FROM daotaoquocte ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addQuocTe($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO daotaoquocte (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailQuocTe($id){
		$sql = "SELECT * FROM daotaoquocte WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editQuocTe($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE daotaoquocte SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE daotaoquocte SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE daotaoquocte SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE daotaoquocte SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE daotaoquocte SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteQuocTe($id){	
		$sql = "DELETE FROM daotaoquocte WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************HocBong*************************/
	public function HocBong($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hocbong ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hocbong ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHocBong(){
		$sql = "SELECT * FROM hocbong ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHocBong($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO hocbong (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailHocBong($id){
		$sql = "SELECT * FROM hocbong WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHocBong($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE hocbong SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE hocbong SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE hocbong SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE hocbong SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE hocbong SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteHocBong($id){	
		$sql = "DELETE FROM hocbong WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************MoiTruong*************************/
	public function MoiTruong($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM moitruonghoctap ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM moitruonghoctap ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getMoiTruong(){
		$sql = "SELECT * FROM moitruonghoctap ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addMoiTruong($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO moitruonghoctap (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailMoiTruong($id){
		$sql = "SELECT * FROM moitruonghoctap WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editMoiTruong($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE moitruonghoctap SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE moitruonghoctap SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE moitruonghoctap SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE moitruonghoctap SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE moitruonghoctap SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteMoiTruong($id){	
		$sql = "DELETE FROM moitruonghoctap WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************CuocThi*************************/
	public function CuocThi($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM cuocthi ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM cuocthi ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getCuocThi(){
		$sql = "SELECT * FROM cuocthi ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addCuocThi($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO cuocthi (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailCuocThi($id){
		$sql = "SELECT * FROM cuocthi WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editCuocThi($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE cuocthi SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE cuocthi SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE cuocthi SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE cuocthi SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE cuocthi SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteCuocThi($id){	
		$sql = "DELETE FROM cuocthi WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	
	/*************DichVu*************************/
	public function DichVu($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM dichvu ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM dichvu ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getDichVu(){
		$sql = "SELECT * FROM dichvu ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addDichVu($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO dichvu (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailDichVu($id){
		$sql = "SELECT * FROM dichvu WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editDichVu($id,$name,$name_link,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE dichvu SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE dichvu SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE dichvu SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE dichvu SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE dichvu SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteDichVu($id){	
		$sql = "DELETE FROM dichvu WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************ViecLam*************************/
	public function ViecLam($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM vieclamthem ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM vieclamthem ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getViecLam(){
		$sql = "SELECT * FROM vieclamthem ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addViecLam($name,$name_link,$donvi,$info,$view,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO vieclamthem (name,name_link,donvi,info,view,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$donvi','$info','$view','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailViecLam($id){
		$sql = "SELECT * FROM vieclamthem WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editViecLam($id,$name,$name_link,$donvi,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE vieclamthem SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE vieclamthem SET name_link='$name_link' WHERE id='$id'");}
		if ($donvi != NULL){$this->do_sql("UPDATE vieclamthem SET donvi='$donvi' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE vieclamthem SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE vieclamthem SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE vieclamthem SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteViecLam($id){	
		$sql = "DELETE FROM vieclamthem WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************CamNangNganh*************************/
	public function CamNangNganh($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM camnangnganh ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM camnangnganh ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getCamNangNganh(){
		$sql = "SELECT * FROM camnangnganh ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addCamNangNganh($name,$name_link,$image,$short_info,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO camnangnganh (name,name_link,image,short_info,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailCamNangNganh($id){
		$sql = "SELECT * FROM camnangnganh WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editCamNangNganh($id, $name,$name_link,$image,$short_info,$info,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE camnangnganh SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE camnangnganh SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE camnangnganh SET image='$image' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE camnangnganh SET short_info='$short_info' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE camnangnganh SET info='$info' WHERE id='$id'");}
		{$this->do_sql("UPDATE camnangnganh SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE camnangnganh SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteCamNangNganh($id){	
		$sql = "DELETE FROM camnangnganh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************chinh_quy*************************/
	public function ChinhQuy($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM chinhquy ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM chinhquy ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getChinhQuy(){
		$sql = "SELECT * FROM chinhquy ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addChinhQuy($modau,$phuongthuc,$hocphi,$uudai,$uudiemhocba,$info,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO chinhquy (modau,phuongthuc,hocphi,uudai,uudiemhocba,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$modau','$phuongthuc','$hocphi','$uudai','$uudiemhocba','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailChinhQuy($id){
		$sql = "SELECT * FROM chinhquy WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editChinhQuy($id,$modau,$phuongthuc,$hocphi,$uudai,$uudiemhocba,$info,$edit_user,$edit_time){
		if ($modau != NULL){$this->do_sql("UPDATE chinhquy SET modau='$modau' WHERE id='$id'");}
		if ($phuongthuc != NULL){$this->do_sql("UPDATE chinhquy SET phuongthuc='$phuongthuc' WHERE id='$id'");}
		if ($hocphi != NULL){$this->do_sql("UPDATE chinhquy SET hocphi='$hocphi' WHERE id='$id'");}
		if ($uudai != NULL){$this->do_sql("UPDATE chinhquy SET uudai='$uudai' WHERE id='$id'");}
		if ($uudiemhocba != NULL){$this->do_sql("UPDATE chinhquy SET uudiemhocba='$uudiemhocba' WHERE id='$id'");}
		if ($info != NULL) {$this->do_sql("UPDATE chinhquy SET info='$info' WHERE id='$id'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE chinhquy SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE chinhquy SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteChinhQuy($id){	
		$sql = "DELETE FROM chinhquy WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/******************************dangkyonline********************/
	public function detailGTdkonline($id){
		$sql = "SELECT * FROM gtdkonline WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGTdkonline($id,$info,$edit_user,$edit_time){
		if ($info != NULL){$this->do_sql("UPDATE gtdkonline SET info='$info' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE gtdkonline SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE gtdkonline SET edit_time='$edit_time' WHERE id='$id_edu'");}
			
		return TRUE;
	}
	/******************************HoSoDangKyOnline********************/
	
	/************************88nguyenvong************************************/
	public function listNguyenVong($idhocsinh){
		$sql = "SELECT * FROM nguyenvong WHERE idhocsinh='$idhocsinh'";
		
		return $this->get_list($sql);
	}


	/******************************huongnghiepholland********************/
	public function detailGThuongnghiep($id){
		$sql = "SELECT * FROM gthuongnghiep WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGThuongnghiep($id,$info,$edit_user,$edit_time){
		if ($info != NULL){$this->do_sql("UPDATE gthuongnghiep SET info='$info' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE gthuongnghiep SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE gthuongnghiep SET edit_time='$edit_time' WHERE id='$id_edu'");}
			
		return TRUE;
	}
	/*****************************************nhom_holland**************************/
	public function listNhomHolland($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM nhom_holland ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM nhom_holland ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNhomHolland(){
		$sql = "SELECT * FROM nhom_holland ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addNhomHolland($name,$dacdiem,$tinhcach,$nganhphuhop,$ctdt,$nganhphanhieu,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO nhom_holland (name,dacdiem,tinhcach,nganhphuhop,ctdt,nganhphanhieu,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$dacdiem','$tinhcach','$nganhphuhop','$ctdt','$nganhphanhieu','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNhomHolland($id){
		$sql = "SELECT * FROM nhom_holland WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editNhomHolland($id,$name,$dacdiem,$tinhcach,$nganhphuhop,$ctdt,$nganhphanhieu,$edit_user,$edit_time){
		if ($name!= NULL)	$this->do_sql("UPDATE nhom_holland SET name='$name' WHERE id='$id'");
		if ($dacdiem!= NULL)	$this->do_sql("UPDATE nhom_holland SET dacdiem='$dacdiem' WHERE id='$id'");
		if ($tinhcach!= NULL)	$this->do_sql("UPDATE nhom_holland SET tinhcach='$tinhcach' WHERE id='$id'");
		if ($ctdt!= NULL)	$this->do_sql("UPDATE nhom_holland SET ctdt='$ctdt' WHERE id='$id'");
		if ($nganhphuhop!= NULL)	$this->do_sql("UPDATE nhom_holland SET nganhphuhop='$nganhphuhop' WHERE id='$id'");
		if ($nganhphanhieu!= NULL)	$this->do_sql("UPDATE nhom_holland SET nganhphanhieu='$nganhphanhieu' WHERE id='$id'");
		if ($edit_user!= NULL)	$this->do_sql("UPDATE nhom_holland SET edit_user='$edit_user' WHERE id='$id'");
		if ($edit_time!= NULL)	$this->do_sql("UPDATE nhom_holland SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteNhomHolland($id){	
		$sql = "DELETE FROM nhom_holland WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function getNameNhomHolland($id){
		$sql = "SELECT * FROM nhom_holland WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	public function getNameNganhNhomHolland($id){
		$sql = "SELECT * FROM nhom_holland WHERE id='$id'";
		$nganhphanhieu = $this->get_row($sql);
		return $nganhphanhieu['nganhphanhieu'];
	}
	/*****************************************holland**************************/
	public function listNganhHolland($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM nganh_holland ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM nganh_holland ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNganhHolland(){
		$sql = "SELECT * FROM nganh_holland ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addNganhHolland($name,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO nganh_holland (nganh,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNganhHolland($id){
		$sql = "SELECT * FROM nganh_holland WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editNganhHolland($id,$name,$edit_user,$edit_time){
		if ($name!= NULL)	$this->do_sql("UPDATE nganh_holland SET nganh='$name' WHERE id='$id'");
		if ($edit_user!= NULL)	$this->do_sql("UPDATE nganh_holland SET edit_user='$edit_user' WHERE id='$id'");
		if ($edit_time!= NULL)	$this->do_sql("UPDATE nganh_holland SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteNganhHolland($id){	
		$sql = "DELETE FROM nganh_holland WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function getNameNganhHolland($id){
		$sql = "SELECT * FROM nganh_holland WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['nganh'];
	}

	/*****************************************dshs_holland**************************/
	public function HSHolland($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hocsinhholland ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hocsinhholland ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHSHolland(){
		$sql = "SELECT * FROM hocsinhholland ORDER BY id DESC";
		return $this->get_list($sql);
	}
	
	public function detailHSHolland($id){
		$sql = "SELECT * FROM hocsinhholland WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function deleteHSHolland($id){	
		$sql = "DELETE FROM hocsinhholland WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************dshs_dkonline**************************/
	public function DKOnline($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hosohocbaonline ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hosohocbaonline ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getDKOnline(){
		$sql = "SELECT * FROM hosohocbaonline ORDER BY id DESC";
		return $this->get_list($sql);
	}
	
	public function detailDKOnline($id){
		$sql = "SELECT * FROM hosohocbaonline WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function deleteDKOnline($id){	
		$sql = "DELETE FROM hosohocbaonline WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	/*****************************************property-holland**************************/
	public function PropertyHolland($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM property_holland ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM property_holland ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getPropertyHolland(){
		$sql = "SELECT * FROM property_holland ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addPropertyHolland($idnhom,$property,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO property_holland (idnhom,property,edit_user,edit_time,daycreate,active) 
		VALUES ('$idnhom','$property','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailPropertyHolland($id){
		$sql = "SELECT * FROM property_holland WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editPropertyHolland($id,$idnhom,$property,$edit_user,$edit_time){
		if ($idnhom!= NULL)	$this->do_sql("UPDATE property_holland SET idnhom='$idnhom' WHERE id='$id'");
		if ($property!= NULL)	$this->do_sql("UPDATE property_holland SET property='$property' WHERE id='$id'");
		if ($edit_user!= NULL)	$this->do_sql("UPDATE property_holland SET edit_user='$edit_user' WHERE id='$id'");
		if ($edit_time!= NULL)	$this->do_sql("UPDATE property_holland SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deletePropertyHolland($id){	
		$sql = "DELETE FROM property_holland WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************Major**************************/
	public function Major($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM major ORDER BY id_major DESC";
		}else{
			$sql = "SELECT * FROM major ORDER BY id_major DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getMajor(){
		$sql = "SELECT * FROM major ORDER BY id_major DESC";
		return $this->get_list($sql);
	}
	public function addMajor($id_typeedupro,$code_major,$school,$name_major,$name_major_link,$link,$image,$short_major,$info_major,$keywords,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name_major = $this->get_str($name_major);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO major (id_typeedupro,code_major,school,name_major,name_major_link,link,image,short_major,info_major,keywords,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_typeedupro','$code_major','$school','$name_major','$name_major_link','$link','$image','$short_major','$info_major','$keywords','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailMajor($id){
		$sql = "SELECT * FROM major WHERE id_major='$id'";
		return $this->get_row($sql);
	}
	public function getMajorTypeEduca($id){
		$sql = "SELECT * FROM major WHERE id_typeedupro='$id'";
		return $this->get_list($sql);
	}
	public function editMajor($id_major,$id_typeedupro,$code_major,$school,$name_major,$name_major_link,$image,$short_major,$info_major,$keywords,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name_major = $this->get_str($name_major);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE major SET daycreate='$daycreate' WHERE id_major='$id_major'");}
		if ($active != NULL){$this->do_sql("UPDATE major SET active='$active' WHERE id_major='$id_major'");}
		if ($view != NULL){$this->do_sql("UPDATE major SET view='$view' WHERE id_major='$id_major'");}
		if ($keywords != NULL){$this->do_sql("UPDATE major SET keywords='$keywords' WHERE id_major='$id_major'");}
		if ($id_typeedupro != NULL){$this->do_sql("UPDATE major SET id_typeedupro='$id_typeedupro' WHERE id_major='$id_major'");}
		if ($code_major != NULL){$this->do_sql("UPDATE major SET code_major='$code_major' WHERE id_major='$id_major'");}
		if ($school != NULL){$this->do_sql("UPDATE major SET school='$school' WHERE id_major='$id_major'");}
		if ($name_major != NULL){$this->do_sql("UPDATE major SET name_major='$name_major' WHERE id_major='$id_major'");}
		if ($name_major_link != NULL) {$this->do_sql("UPDATE major SET name_major_link='$name_major_link' WHERE id_major='$id_major'");}
		if ($image != NULL)	{$this->do_sql("UPDATE major SET image='$image' WHERE id_major='$id_major'");}
			$this->do_sql("UPDATE major SET short_major='$short_major' WHERE id_major='$id_major'");
			$this->do_sql("UPDATE major SET info_major='$info_major' WHERE id_major='$id_major'");
			$this->do_sql("UPDATE major SET edit_user='$edit_user' WHERE id_major='$id_major'");
			$this->do_sql("UPDATE major SET edit_time='$edit_time' WHERE id_major='$id_major'");
			$this->do_sql("UPDATE major SET numbers='$numbers' WHERE id_major='$id_major'");
		return TRUE;
	}
	
	public function deleteMajor($id){	
		$sql = "DELETE FROM major WHERE id_major='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function getNameMajor($id){
		$sql = "SELECT * FROM major WHERE id_major='$id'";
		$name = $this->get_row($sql);
		return $name['name_major'];
	}
	/*****************************************Education**************************/
	public function Education($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM education ORDER BY id_edu DESC";
		}else{
			$sql = "SELECT * FROM education ORDER BY id_edu DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getEducation(){
		$sql = "SELECT * FROM education ORDER BY id_edu DESC";
		return $this->get_list($sql);
	}
	public function addEducation($name_edu,$name_edu_link,$info_edu,$edit_user,$edit_time,$daycreate,$active){
		$name_edu = $this->get_str($name_edu);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO education (name_edu,name_edu_link,info_edu,edit_user,edit_time,daycreate,active) 
		VALUES ('$name_edu','$name_edu_link','$info_edu','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailEducation($id){
		$sql = "SELECT * FROM education WHERE id_edu='$id'";
		return $this->get_row($sql);
	}
	public function editEducation($id_edu,$name_edu,$name_edu_link,$info_edu,$edit_user,$edit_time,$daycreate,$active){
		$name_edu = $this->get_str($name_edu);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE education SET daycreate='$daycreate' WHERE id_edu='$id_edu'");}
		if ($active != NULL){$this->do_sql("UPDATE education SET active='$active' WHERE id_edu='$id_edu'");}
		if ($name_edu != NULL){$this->do_sql("UPDATE education SET name_edu='$name_edu' WHERE id_edu='$id_edu'");}
		if ($name_edu_link != NULL) {$this->do_sql("UPDATE education SET name_edu_link='$name_edu_link' WHERE id_edu='$id_edu'");}
			$this->do_sql("UPDATE education SET info_edu='$info_edu' WHERE id_edu='$id_edu'");
			$this->do_sql("UPDATE education SET edit_user='$edit_user' WHERE id_edu='$id_edu'");
			$this->do_sql("UPDATE education SET edit_time='$edit_time' WHERE id_edu='$id_edu'");
		return TRUE;
	}
	
	public function deleteEducation($id){	
		$sql = "DELETE FROM education WHERE id_edu='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************test-Shedule**************************/
	public function TestShedule($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM test_schedule ORDER BY id_test_schedule DESC";
		}else{
			$sql = "SELECT * FROM test_schedule ORDER BY id_test_schedule DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getTestShedule(){
		$sql = "SELECT * FROM test_schedule ORDER BY id_test_schedule DESC";
		return $this->get_list($sql);
	}
	public function addTestShedule($id_typeedupro,$name_test_schedule,$name_test_schedule_link,$info_test_schedule,$numbers,$edit_user,$edit_time,$daycreate,$view,$active){
		$name_test_schedule = $this->get_str($name_test_schedule);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO test_schedule (id_typeedupro,name_test_schedule,name_test_schedule_link,info_test_schedule,numbers,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$id_typeedupro','$name_test_schedule','$name_test_schedule_link','$info_test_schedule','$numbers','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailTestShedule($id){
		$sql = "SELECT * FROM test_schedule WHERE id_test_schedule='$id'";
		return $this->get_row($sql);
	}
	public function editTestShedule($id_test_schedule,$id_typeedupro,$name_test_schedule,$name_test_schedule_link,$info_test_schedule,$numbers,$edit_user,$edit_time,$daycreate,$view,$active){
		$name_test_schedule = $this->get_str($name_test_schedule);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE test_schedule SET daycreate='$daycreate' WHERE id_test_schedule='$id_test_schedule'");}
		if ($view != NULL){$this->do_sql("UPDATE test_schedule SET view='$view' WHERE id_test_schedule='$id_test_schedule'");}
		if ($id_typeedupro != NULL){$this->do_sql("UPDATE test_schedule SET id_typeedupro='$id_typeedupro' WHERE id_test_schedule='$id_test_schedule'");}
		if ($active != NULL){$this->do_sql("UPDATE test_schedule SET active='$active' WHERE id_test_schedule='$id_test_schedule'");}
		if ($name_test_schedule != NULL){$this->do_sql("UPDATE test_schedule SET name_test_schedule='$name_test_schedule' WHERE id_test_schedule='$id_test_schedule'");}
		if ($name_edu_link != NULL) {$this->do_sql("UPDATE test_schedule SET name_test_schedule_link='$name_test_schedule_link' WHERE id_test_schedule='$id_test_schedule'");}
			$this->do_sql("UPDATE test_schedule SET info_test_schedule='$info_test_schedule' WHERE id_test_schedule='$id_test_schedule'");
			$this->do_sql("UPDATE test_schedule SET numbers='$numbers' WHERE id_test_schedule='$id_test_schedule'");
			$this->do_sql("UPDATE test_schedule SET edit_user='$edit_user' WHERE id_test_schedule='$id_test_schedule'");
			$this->do_sql("UPDATE test_schedule SET edit_time='$edit_time' WHERE id_test_schedule='$id_test_schedule'");
		return TRUE;
	}
	
	public function deleteTestShedule($id){	
		$sql = "DELETE FROM test_schedule WHERE id_test_schedule='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************faculty**************/
	public function listKhoa($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM khoa";
		}else{
			$sql = "SELECT * FROM khoa ORDER BY id  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function listDSKhoa(){
			$sql = "SELECT * FROM khoa";
		
		return $this->get_list($sql);
	}
	public function getKhoa(){
		$sql = "SELECT * FROM khoa";
		return $this->get_list($sql);
	}	
	
		                        
	public function createKhoa($name,$truongkhoa,$phokhoa,$giaovu,$diachi,$dienthoai,$email,$fanpage,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO khoa (name,truongkhoa,phokhoa,giaovu,diachi,dienthoai,email,fanpage,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$truongkhoa','$phokhoa','$giaovu','$diachi','$dienthoai','$email','$fanpage','$edit_user','$edit_time','$daycreate','$active')";
		check($sql);
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteKhoa($id){
		$sql = "DELETE FROM khoa WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateKhoa($id,$name,$truongkhoa,$phokhoa,$giaovu,$diachi,$dienthoai,$email,$fanpage,$edit_user,$edit_time){
		if ($name != NULL){$this->do_sql("UPDATE khoa SET name='$name' WHERE id='$id'");}	
		if ($truongkhoa != NULL){$this->do_sql("UPDATE khoa SET truongkhoa='$truongkhoa' WHERE id='$id'");}
		if ($phokhoa != NULL){$this->do_sql("UPDATE khoa SET phokhoa='$phokhoa' WHERE id='$id'");}	
		if ($giaovu != NULL){$this->do_sql("UPDATE khoa SET giaovu='$giaovu' WHERE id='$id'");}
		if ($diachi != NULL){$this->do_sql("UPDATE khoa SET diachi='$diachi' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE khoa SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE khoa SET edit_time='$edit_time' WHERE id='$id'");}
		if ($dienthoai != NULL){$this->do_sql("UPDATE khoa SET dienthoai='$dienthoai' WHERE id='$id'");}
		if ($email != NULL){$this->do_sql("UPDATE khoa SET email='$email' WHERE id='$id'");}
		if ($fanpage != NULL){$this->do_sql("UPDATE khoa SET fanpage='$fanpage' WHERE id='$id'");}
		return TRUE;
	}
	
	public function detailKhoa($id){
		$sql = "SELECT * FROM khoa WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameKhoa($id){
		$sql = "SELECT * FROM khoa WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}

	/*************************nganh**************/
	public function Nganh($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM nganh";
		}else{
			$sql = "SELECT * FROM nganh ORDER BY id  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getNganh(){
		$sql = "SELECT * FROM nganh";
		return $this->get_list($sql);
	}	
	
		                        
	public function addNganh($name,$name_link,$gioithieunganh,$lotrinhhoc,$dactachuongtrinh,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO nganh (name,name_link,gioithieunganh,lotrinhhoc,dactachuongtrinh,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$gioithieunganh','$lotrinhhoc','$dactachuongtrinh','$edit_user','$edit_time','$daycreate','$active')";
		check($sql);
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteNganh($id){
		$sql = "DELETE FROM nganh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateNganh($id,$name,$name_link,$gioithieunganh,$lotrinhhoc,$dactachuongtrinh,$edit_user,$edit_time)
	{
		if ($name != NULL){$this->do_sql("UPDATE nganh SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE nganh SET name_link='$name_link' WHERE id='$id'");}	
		if ($gioithieunganh != NULL){$this->do_sql("UPDATE nganh SET gioithieunganh='$gioithieunganh' WHERE id='$id'");}
		if ($lotrinhhoc != NULL){$this->do_sql("UPDATE nganh SET lotrinhhoc='$lotrinhhoc' WHERE id='$id'");}
		if ($dactachuongtrinh != NULL){$this->do_sql("UPDATE nganh SET dactachuongtrinh='$dactachuongtrinh' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE nganh SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE nganh SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function detailNganh($id){
		$sql = "SELECT * FROM nganh WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function NameNganh($id){
		$sql = "SELECT * FROM nganh WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	
	/***********************class**********************/
	public function listClass($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM class ORDER BY numbers";
		}else{
			$sql = "SELECT * FROM class ORDER BY numbers  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getClass(){
		$sql = "SELECT * FROM class ORDER BY id";
		return $this->get_list($sql);
	}
	public function addClass($name,$course,$id_typeedupro,$name_link,$decription,$edit_user,$edit_time,$daycreate,$active,$numbers){
		$name = $this->get_str($name);
		$name_link = $this->get_str($name_link);
		$edit_user = $this->get_str($edit_user);
		
			$sql = "INSERT INTO class (name,course,id_typeedupro,name_link,decription,edit_user,edit_time,daycreate,active,numbers) 
			VALUES ('$name','$course','$id_typeedupro','$name_link','$decription','$edit_user','$edit_time','$daycreate','$active','$numbers')";
			$this->do_sql($sql);
			return true;
		
	}
	public function detailClass($id){
		$sql = "SELECT * FROM class WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editClass($id,$name,$course,$id_typeedupro,$name_link,$decription,$edit_user,$edit_time,$numbers,$daycreate,$active){
		$name = $this->get_str($name);
		$name_link = $this->get_str($name_link);
		$edit_user = $this->get_str($edit_user);
		
			if ($daycreate != NULL){$this->do_sql("UPDATE class SET daycreate='$daycreate' WHERE id='$id'");}
		    if ($active != NULL){$this->do_sql("UPDATE class SET active='$active' WHERE id='$id'");}
			if ($course != NULL){$this->do_sql("UPDATE class SET course='$course' WHERE id='$id'");}
		    if ($id_typeedupro != NULL){$this->do_sql("UPDATE class SET id_typeedupro='$id_typeedupro' WHERE id='$id'");}
			$this->do_sql("UPDATE class SET decription='$decription' WHERE id='$id'");
			$this->do_sql("UPDATE class SET name='$name' WHERE id='$id'");
			$this->do_sql("UPDATE class SET name_link='$name_link' WHERE id='$id'");
			$this->do_sql("UPDATE class SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE class SET edit_time='$edit_time' WHERE id='$id'");
			$this->do_sql("UPDATE class SET numbers='$numbers' WHERE id='$id'");
			return TRUE;
		
	}
	
	public function deleteClass($id){	
		$sql = "DELETE FROM class WHERE id='$id'";
		$this->do_sql($sql);
		
		return TRUE;
	}
	public function getNameClass($id){
		$sql = "SELECT * FROM class WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************old_student**************************/
	public function OldStudent($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM old_students ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM old_students ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getOldStudent(){
		$sql = "SELECT * FROM old_students ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addOldStudent($khoa,$nganh,$image,$name,$address,$email,$phone,$facebook,$coquan,$chucvu,$info,$edit_user,$edit_time,$daycreate,$active){
		
			$sql = "INSERT INTO old_students (khoa,nganh,image,ten,address,email,phone,facebook,coquan,chucvu,info,edit_user,edit_time,daycreate,active) 
			VALUES ('$khoa','$nganh','$image','$name','$address','$email','$phone','$facebook','$coquan','$chucvu','$info','$edit_user','$edit_time','$daycreate','$active')";
			$this->do_sql($sql);
			return true;
		
	}
	public function detailOldStudent($id){
		$sql = "SELECT * FROM old_students WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editOldStudent($id,$khoa,$nganh,$image,$name,$address,$email,$phone,$facebook,$coquan,$chucvu,$info,$edit_user,$edit_time){
		
		if ($khoa != NULL){$this->do_sql("UPDATE old_students SET khoa='$khoa' WHERE id='$id'");}
		if ($nganh != NULL){$this->do_sql("UPDATE old_students SET nganh='$nganh' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE old_students SET image='$image' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE old_students SET ten='$name' WHERE id='$id'");}
		if ($address != NULL){$this->do_sql("UPDATE old_students SET address='$address' WHERE id='$id'");}
		if ($email != NULL) {$this->do_sql("UPDATE old_students SET email='$email' WHERE id='$id'");}
		if ($phone != NULL)	{$this->do_sql("UPDATE old_students SET phone='$phone' WHERE id='$id'");}
		if ($facebook != NULL){$this->do_sql("UPDATE old_students SET facebook='$facebook' WHERE id='$id'");}
		if ($chucvu != NULL){$this->do_sql("UPDATE old_students SET chucvu='$chucvu' WHERE id='$id'");}
		if ($coquan != NULL){$this->do_sql("UPDATE old_students SET coquan='$coquan' WHERE id='$id'");}
		if ($info != NULL){$this->do_sql("UPDATE old_students SET info='$info' WHERE id='$id'");}
		if ($edit_user != NULL){	$this->do_sql("UPDATE old_students SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){	$this->do_sql("UPDATE old_students SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteOldStudent($id){	
		$sql = "DELETE FROM old_students WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************work_schedule**************************/
	public function WorkSchedule($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM work_schedule ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM work_schedule ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getWorkSchedule(){
		$sql = "SELECT * FROM work_schedule ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addWorkSchedule($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO work_schedule (name,name_link,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailWorkSchedule($id){
		$sql = "SELECT * FROM work_schedule WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editWorkSchedule($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		
		if ($daycreate != NULL){$this->do_sql("UPDATE work_schedule SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE work_schedule SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE work_schedule SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE work_schedule SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE work_schedule SET name_link='$name_link' WHERE id='$id'");}
		
			$this->do_sql("UPDATE work_schedule SET info='$info' WHERE id='$id'");
			$this->do_sql("UPDATE work_schedule SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE work_schedule SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteWorkSchedule($id){	
		$sql = "DELETE FROM work_schedule WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************room_schedule**************************/
	public function RoomSchedule($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM room_schedule ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM room_schedule ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getRoomSchedule(){
		$sql = "SELECT * FROM room_schedule ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addRoomSchedule($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO room_schedule (name,name_link,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailRoomSchedule($id){
		$sql = "SELECT * FROM room_schedule WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editRoomSchedule($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE room_schedule SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE room_schedule SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE room_schedule SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE room_schedule SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE room_schedule SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE room_schedule SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE room_schedule SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE room_schedule SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteRoomSchedule($id){	
		$sql = "DELETE FROM room_schedule WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************meet_student_schedule**************************/
	public function MeetStudentSchedule($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM meet_student_schedule ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM meet_student_schedule ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getMeetStudentSchedule(){
		$sql = "SELECT * FROM meet_student_schedule ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addMeetStudentSchedule($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO meet_student_schedule (name,name_link,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailMeetStudentSchedule($id){
		$sql = "SELECT * FROM meet_student_schedule WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editMeetStudentSchedule($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE meet_student_schedule SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE meet_student_schedule SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE meet_student_schedule SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE meet_student_schedule SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE meet_student_schedule SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE meet_student_schedule SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE meet_student_schedule SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE meet_student_schedule SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteMeetStudentSchedule($id){	
		$sql = "DELETE FROM meet_student_schedule WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************job**************************/
	public function Job($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM job ORDER BY id_job DESC";
		}else{
			$sql = "SELECT * FROM job ORDER BY id_job DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getJob(){
		$sql = "SELECT * FROM job ORDER BY id_job DESC";
		return $this->get_list($sql);
	}
	public function addJob($name_job,$name_job_link,$company,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name_job = $this->get_str($name_job);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO job (name_job,name_job_link,company,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name_job','$name_job_link','$company','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailJob($id_job){
		$sql = "SELECT * FROM job WHERE id_job='$id_job'";
		return $this->get_row($sql);
	}
	public function editJob($id_job,$name_job,$name_job_link,$company,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name_job = $this->get_str($name_job);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE job SET daycreate='$daycreate' WHERE id_job='$id_job'");}
		if ($view != NULL){$this->do_sql("UPDATE job SET view='$view' WHERE id_job='$id_job'");}
		if ($active != NULL){$this->do_sql("UPDATE job SET active='$active' WHERE id_job='$id_job'");}
		if ($name_job != NULL){$this->do_sql("UPDATE job SET name_job='$name_job' WHERE id_job='$id_job'");}
		if ($company != NULL){$this->do_sql("UPDATE job SET company='$company' WHERE id_job='$id_job'");}
		if ($name_job_link != NULL) {$this->do_sql("UPDATE job SET name_job_link='$name_job_link' WHERE id_job='$id_job'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE job SET numbers='$numbers' WHERE id_job='$id_job'");}
			$this->do_sql("UPDATE job SET info='$info' WHERE id_job='$id_job'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE job SET edit_user='$edit_user' WHERE id_job='$id_job'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE job SET edit_time='$edit_time' WHERE id_job='$id_job'");}
		return TRUE;
	}
	
	public function deleteJob($id_job){	
		$sql = "DELETE FROM job WHERE id_job='$id_job'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************intership**************************/
	public function Intership($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM intership ORDER BY id_intership DESC";
		}else{
			$sql = "SELECT * FROM intership ORDER BY id_intership DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getIntership(){
		$sql = "SELECT * FROM intership ORDER BY id_intership DESC";
		return $this->get_list($sql);
	}
	public function addIntership($name_intership,$name_intership_link,$note,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name_intership = $this->get_str($name_intership);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO intership (name_intership,name_intership_link,note,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name_intership','$name_intership_link','$note','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailIntership($id_intership){
		$sql = "SELECT * FROM intership WHERE id_intership='$id_intership'";
		return $this->get_row($sql);
	}
	public function editIntership($id_intership,$name_intership,$name_intership_link,$note,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name_intership = $this->get_str($name_intership);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE intership SET daycreate='$daycreate' WHERE id_intership='$id_intership'");}
		if ($view != NULL){$this->do_sql("UPDATE intership SET view='$view' WHERE id_intership='$id_intership'");}
		if ($active != NULL){$this->do_sql("UPDATE intership SET active='$active' WHERE id_intership='$id_intership'");}
		if ($name_intership != NULL){$this->do_sql("UPDATE intership SET name_intership='$name_intership' WHERE id_intership='$id_intership'");}
		if ($note != NULL){$this->do_sql("UPDATE intership SET note='$note' WHERE id_intership='$id_intership'");}
		if ($name_intership_link != NULL) {$this->do_sql("UPDATE intership SET name_intership_link='$name_intership_link' WHERE id_intership='$id_intership'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE intership SET numbers='$numbers' WHERE id_intership='$id_intership'");}
			$this->do_sql("UPDATE intership SET info='$info' WHERE id_intership='$id_intership'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE intership SET edit_user='$edit_user' WHERE id_intership='$id_intership'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE intership SET edit_time='$edit_time' WHERE id_intership='$id_intership'");}
		return TRUE;
	}
	
	public function deleteIntership($id_intership){	
		$sql = "DELETE FROM intership WHERE id_intership='$id_intership'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************skill**************************/
	public function Skill($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM skills ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM skills ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getSkill(){
		$sql = "SELECT * FROM skills ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addSkill($name,$name_link,$short_info,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO skills (name,name_link,short_info,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name','$name_link','$short_info','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailSkill($id){
		$sql = "SELECT * FROM skills WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editSkill($id,$name,$name_link,$short_info,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE skills SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE skills SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE skills SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE skills SET name='$name' WHERE id='$id'");}
		if ($short_info != NULL){$this->do_sql("UPDATE skills SET short_info='$short_info' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE skills SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE skills SET numbers='$numbers' WHERE id='$id'");}
			$this->do_sql("UPDATE skills SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE skills SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE skills SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteSkill($id){	
		$sql = "DELETE FROM skills WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************sport**************************/
	public function Sport($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sport ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM sport ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getSport(){
		$sql = "SELECT * FROM sport ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addSport($name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO sport (name,name_link,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailSport($id){
		$sql = "SELECT * FROM sport WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editSport($id,$name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE sport SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE sport SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE sport SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE sport SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE sport SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE sport SET numbers='$numbers' WHERE id='$id'");}
			$this->do_sql("UPDATE sport SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE sport SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE sport SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteSport($id){	
		$sql = "DELETE FROM sport WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************canteen**************************/
	public function Canteen($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM canteen ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM canteen ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getCanteen(){
		$sql = "SELECT * FROM canteen ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addCanteen($name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO canteen (name,name_link,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailCanteen($id){
		$sql = "SELECT * FROM canteen WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editCanteen($id,$name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE canteen SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE canteen SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE canteen SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE canteen SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE canteen SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE canteen SET numbers='$numbers' WHERE id='$id'");}
			$this->do_sql("UPDATE canteen SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE canteen SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE canteen SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteCanteen($id){	
		$sql = "DELETE FROM canteen WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************insurrance**************************/
	public function Insurrance($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM insurrance ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM insurrance ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getInsurrance(){
		$sql = "SELECT * FROM insurrance ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addInsurrance($name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO insurrance (name,name_link,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailInsurrance($id){
		$sql = "SELECT * FROM insurrance WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editInsurrance($id,$name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE insurrance SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE insurrance SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE insurrance SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE insurrance SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE insurrance SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE insurrance SET numbers='$numbers' WHERE id='$id'");}
			$this->do_sql("UPDATE insurrance SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE insurrance SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE insurrance SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteInsurrance($id){	
		$sql = "DELETE FROM insurrance WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************intro-dormi**************************/
	public function IntroDormi($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM intro_dormitory ORDER BY id_inde DESC";
		}else{
			$sql = "SELECT * FROM intro_dormitory ORDER BY id_inde DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getIntroDormi(){
		$sql = "SELECT * FROM intro_dormitory ORDER BY id_inde DESC";
		return $this->get_list($sql);
	}
	public function addIntroDormi($info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO intro_dormitory (info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailIntroDormi($id_inde){
		$sql = "SELECT * FROM intro_dormitory WHERE id_inde='$id_inde'";
		return $this->get_row($sql);
	}
	public function editIntroDormi($id_inde,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE intro_dormitory SET daycreate='$daycreate' WHERE id_inde='$id_inde'");}
		if ($view != NULL){$this->do_sql("UPDATE intro_dormitory SET view='$view' WHERE id_inde='$id_inde'");}
		if ($active != NULL){$this->do_sql("UPDATE intro_dormitory SET active='$active' WHERE id_inde='$id_inde'");}
		if ($info != NULL){	$this->do_sql("UPDATE intro_dormitory SET info='$info' WHERE id_inde='$id_inde'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE intro_dormitory SET edit_user='$edit_user' WHERE id_inde='$id_inde'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE intro_dormitory SET edit_time='$edit_time' WHERE id_inde='$id_inde'");}
		return TRUE;
	}
	
	public function deleteIntroDormi($id_inde){	
		$sql = "DELETE FROM intro_dormitory WHERE id_inde='$id_inde'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************news-dormi**************************/
	public function NewsDormi($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM news_dormi ORDER BY id_newdo DESC";
		}else{
			$sql = "SELECT * FROM news_dormi ORDER BY id_newdo DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNewsDormi(){
		$sql = "SELECT * FROM news_dormi ORDER BY id_newdo DESC";
		return $this->get_list($sql);
	}
	public function addNewsDormi($name_newdo,$name_newdo_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name_newdo = $this->get_str($name_newdo);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO news_dormi (name_newdo,name_newdo_link,short_info,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name_newdo','$name_newdo_link','$short_info','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNewsDormi($id_newdo){
		$sql = "SELECT * FROM news_dormi WHERE id_newdo='$id_newdo'";
		return $this->get_row($sql);
	}
	public function editNewsDormi($id_newdo,$name_newdo,$name_newdo_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE news_dormi SET daycreate='$daycreate' WHERE id_newdo='$id_newdo'");}
		if ($view != NULL){$this->do_sql("UPDATE news_dormi SET view='$view' WHERE id_newdo='$id_newdo'");}
		if ($active != NULL){$this->do_sql("UPDATE news_dormi SET active='$active' WHERE id_newdo='$id_newdo'");}
		if ($info != NULL){	$this->do_sql("UPDATE news_dormi SET info='$info' WHERE id_newdo='$id_newdo'");}
		if ($name_newdo != NULL){$this->do_sql("UPDATE news_dormi SET name_newdo='$name_newdo' WHERE id_newdo='$id_newdo'");}
		if ($name_newdo_link != NULL){$this->do_sql("UPDATE news_dormi SET name_newdo_link='$name_newdo_link' WHERE id_newdo='$id_newdo'");}
		if ($short_info != NULL){	$this->do_sql("UPDATE news_dormi SET short_info='$short_info' WHERE id_newdo='$id_newdo'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE news_dormi SET edit_user='$edit_user' WHERE id_newdo='$id_newdo'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE news_dormi SET edit_time='$edit_time' WHERE id_newdo='$id_newdo'");}
		return TRUE;
	}
	
	public function deleteNewsDormi($id_newdo){	
		$sql = "DELETE FROM news_dormi WHERE id_newdo='$id_newdo'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************manage-dormi**************************/
	public function ManageDormi($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM manage_dormi ORDER BY id_managedo DESC";
		}else{
			$sql = "SELECT * FROM manage_dormi ORDER BY id_managedo DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getManageDormi(){
		$sql = "SELECT * FROM manage_dormi ORDER BY id_managedo DESC";
		return $this->get_list($sql);
	}
	public function addManageDormi($name_managedo,$name_managedo_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name_managedo = $this->get_str($name_managedo);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO manage_dormi (name_managedo,name_managedo_link,short_info,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name_managedo','$name_managedo_link','$short_info','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailManageDormi($id_managedo){
		$sql = "SELECT * FROM manage_dormi WHERE id_managedo='$id_managedo'";
		return $this->get_row($sql);
	}
	public function editManageDormi($id_managedo,$name_managedo,$name_managedo_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE manage_dormi SET daycreate='$daycreate' WHERE id_managedo='$id_managedo'");}
		if ($view != NULL){$this->do_sql("UPDATE manage_dormi SET view='$view' WHERE id_managedo='$id_managedo'");}
		if ($active != NULL){$this->do_sql("UPDATE manage_dormi SET active='$active' WHERE id_managedo='$id_managedo'");}
		if ($info != NULL){	$this->do_sql("UPDATE manage_dormi SET info='$info' WHERE id_managedo='$id_managedo'");}
		if ($name_managedo != NULL){$this->do_sql("UPDATE manage_dormi SET name_managedo='$name_managedo' WHERE id_managedo='$id_managedo'");}
		if ($name_managedo_link != NULL){$this->do_sql("UPDATE manage_dormi SET name_managedo_link='$name_managedo_link' WHERE id_managedo='$id_managedo'");}
		if ($short_info != NULL){	$this->do_sql("UPDATE manage_dormi SET short_info='$short_info' WHERE id_managedo='$id_managedo'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE manage_dormi SET edit_user='$edit_user' WHERE id_managedo='$id_managedo'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE manage_dormi SET edit_time='$edit_time' WHERE id_managedo='$id_managedo'");}
		return TRUE;
	}
	
	public function deleteManageDormi($id_managedo){	
		$sql = "DELETE FROM manage_dormi WHERE id_managedo='$id_managedo'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_procedure**************/
	public function listTypeProcedure($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_procedure ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM type_procedure ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypeProcedure(){
		$sql = "SELECT * FROM type_procedure";
		return $this->get_list($sql);
	}
		
	public function createTypeProcedure($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_procedure (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypeProcedure($id){
		$sql = "DELETE FROM type_procedure WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypeProcedure($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_procedure SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_procedure SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_procedure SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_procedure SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_procedure SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypeProcedure($id){
		$sql = "SELECT * FROM type_procedure WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypeProcedure($id){
		$sql = "SELECT * FROM type_procedure WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************procedure**************************/
	public function Procedure($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM procedures ORDER BY id_pro DESC";
		}else{
			$sql = "SELECT * FROM procedures ORDER BY id_pro DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getProcedure(){
		$sql = "SELECT * FROM procedures ORDER BY id_pro DESC";
		return $this->get_list($sql);
	}
	public function addProcedure($id_typepro,$name_pro,$name_pro_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name_pro = $this->get_str($name_pro);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO procedures (id_typepro,name_pro,name_pro_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_typepro','$name_pro','$name_pro_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailProcedure($id){
		$sql = "SELECT * FROM procedures WHERE id_pro='$id'";
		return $this->get_row($sql);
	}
	public function editProcedure($id_pro,$id_typepro,$name_pro,$name_pro_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name_pro = $this->get_str($name_pro);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE procedures SET daycreate='$daycreate' WHERE id_pro='$id_pro'");}
		if ($active != NULL){$this->do_sql("UPDATE procedures SET active='$active' WHERE id_pro='$id_pro'");}
		if ($view != NULL){$this->do_sql("UPDATE procedures SET view='$view' WHERE id_pro='$id_pro'");}
			$this->do_sql("UPDATE procedures SET id_typepro='$id_typepro' WHERE id_pro='$id_pro'");
			$this->do_sql("UPDATE procedures SET name_pro='$name_pro' WHERE id_pro='$id_pro'");
		if ($name_pro_link != NULL) {$this->do_sql("UPDATE procedures SET name_pro_link='$name_pro_link' WHERE id_pro='$id_pro'");}
			$this->do_sql("UPDATE procedures SET info='$info' WHERE id_pro='$id_pro'");
			$this->do_sql("UPDATE procedures SET edit_user='$edit_user' WHERE id_pro='$id_pro'");
			$this->do_sql("UPDATE procedures SET edit_time='$edit_time' WHERE id_pro='$id_pro'");
			$this->do_sql("UPDATE procedures SET numbers='$numbers' WHERE id_pro='$id_pro'");
		return TRUE;
	}
	
	public function deleteProcedure($id){	
		$sql = "DELETE FROM procedures WHERE id_pro='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************intro-scholarship**************************/
	public function Scholarship($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM intro_scholarship ORDER BY id_introscho DESC";
		}else{
			$sql = "SELECT * FROM intro_scholarship ORDER BY id_introscho DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getScholarship(){
		$sql = "SELECT * FROM intro_scholarship ORDER BY id_introscho DESC";
		return $this->get_list($sql);
	}
	public function addScholarship($info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO intro_scholarship (info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailScholarship($id_introscho){
		$sql = "SELECT * FROM intro_scholarship WHERE id_introscho='$id_introscho'";
		return $this->get_row($sql);
	}
	public function editScholarship($id_introscho,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE intro_scholarship SET daycreate='$daycreate' WHERE id_introscho='$id_introscho'");}
		if ($view != NULL){$this->do_sql("UPDATE intro_scholarship SET view='$view' WHERE id_introscho='$id_introscho'");}
		if ($active != NULL){$this->do_sql("UPDATE intro_scholarship SET active='$active' WHERE id_introscho='$id_introscho'");}
		if ($info != NULL){	$this->do_sql("UPDATE intro_scholarship SET info='$info' WHERE id_introscho='$id_introscho'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE intro_scholarship SET edit_user='$edit_user' WHERE id_introscho='$id_introscho'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE intro_scholarship SET edit_time='$edit_time' WHERE id_introscho='$id_introscho'");}
		return TRUE;
	}
	
	public function deleteScholarship($id_introscho){	
		$sql = "DELETE FROM intro_scholarship WHERE id_introscho='$id_introscho'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************question_scholarship**************************/
	public function QuestionScholarship($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM question_scholarship ORDER BY id_quescho DESC";
		}else{
			$sql = "SELECT * FROM question_scholarship ORDER BY id_quescho DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getQuestionScholarship(){
		$sql = "SELECT * FROM question_scholarship ORDER BY id_quescho DESC";
		return $this->get_list($sql);
	}
	public function addQuestionScholarship($info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO question_scholarship (info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailQuestionScholarship($id_quescho){
		$sql = "SELECT * FROM question_scholarship WHERE id_quescho='$id_quescho'";
		return $this->get_row($sql);
	}
	public function editQuestionScholarship($id_quescho,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE question_scholarship SET daycreate='$daycreate' WHERE id_quescho='$id_quescho'");}
		if ($view != NULL){$this->do_sql("UPDATE question_scholarship SET view='$view' WHERE id_quescho='$id_quescho'");}
		if ($active != NULL){$this->do_sql("UPDATE question_scholarship SET active='$active' WHERE id_quescho='$id_quescho'");}
		if ($info != NULL){	$this->do_sql("UPDATE question_scholarship SET info='$info' WHERE id_quescho='$id_quescho'");}
		if ($edit_user != NULL)	{$this->do_sql("UPDATE question_scholarship SET edit_user='$edit_user' WHERE id_quescho='$id_quescho'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE question_scholarship SET edit_time='$edit_time' WHERE id_quescho='$id_quescho'");}
		return TRUE;
	}
	
	public function deleteQuestionScholarship($id_quescho){	
		$sql = "DELETE FROM question_scholarship WHERE id_quescho='$id_quescho'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************news_scholarship**************************/
	public function NewsScholarship($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM news_scholarship ORDER BY id_newscho DESC";
		}else{
			$sql = "SELECT * FROM news_scholarship ORDER BY id_newscho DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNewsScholarship(){
		$sql = "SELECT * FROM news_scholarship ORDER BY id_newscho DESC";
		return $this->get_list($sql);
	}
	public function addNewsScholarship($name,$name_link,$image,$short_info,$info,$status_new,$status_scho,$edit_user,$edit_time,$daycreate,$numbers,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO news_scholarship (name,name_link,image,short_info,info,status_new,status_scho,edit_user,edit_time,daycreate,numbers,view,active) 
		VALUES ('$name','$name_link','$image','$short_info','$info','$status_new','$status_scho','$edit_user','$edit_time','$daycreate','$numbers','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNewsScholarship($id_newscho){
		$sql = "SELECT * FROM news_scholarship WHERE id_newscho='$id_newscho'";
		return $this->get_row($sql);
	}
	public function editNewsScholarship($id_newscho,$name,$name_link,$image,$short_info,$info,$status_new,$status_scho,$edit_user,$edit_time,$daycreate,$numbers,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE news_scholarship SET daycreate='$daycreate' WHERE id_newscho='$id_newscho'");}
		if ($view != NULL){$this->do_sql("UPDATE news_scholarship SET view='$view' WHERE id_newscho='$id_newscho'");}
		if ($active != NULL){$this->do_sql("UPDATE news_scholarship SET active='$active' WHERE id_newscho='$id_newscho'");}
		if ($name != NULL){$this->do_sql("UPDATE news_scholarship SET name='$name' WHERE id_newscho='$id_newscho'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE news_scholarship SET name_link='$name_link' WHERE id_newscho='$id_newscho'");}
		if ($image != NULL) {$this->do_sql("UPDATE news_scholarship SET image='$image' WHERE id_newscho='$id_newscho'");}
		if ($short_info != NULL) {$this->do_sql("UPDATE news_scholarship SET short_info='$short_info' WHERE id_newscho='$id_newscho'");}
		if ($status_new != NULL) {$this->do_sql("UPDATE news_scholarship SET status_new='$status_new' WHERE id_newscho='$id_newscho'");}
		if ($status_scho != NULL) {$this->do_sql("UPDATE news_scholarship SET status_scho='$status_scho' WHERE id_newscho='$id_newscho'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE news_scholarship SET numbers='$numbers' WHERE id_newscho='$id_newscho'");}
			$this->do_sql("UPDATE news_scholarship SET info='$info' WHERE id_newscho='$id_newscho'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE news_scholarship SET edit_user='$edit_user' WHERE id_newscho='$id_newscho'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE news_scholarship SET edit_time='$edit_time' WHERE id_newscho='$id_newscho'");}
		return TRUE;
	}
	
	public function deleteNewsScholarship($id_newscho){	
		$sql = "DELETE FROM news_scholarship WHERE id_newscho='$id_newscho'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	/*****************************************policy_scholarship**************************/
	public function PolicyScholarship($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM policy_scholarship ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM policy_scholarship ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getPolicyScholarship(){
		$sql = "SELECT * FROM policy_scholarship ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addPolicyScholarship($name,$name_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO policy_scholarship (name,name_link,short_info,info,edit_user,edit_time,daycreate,view,active) 
		VALUES ('$name','$name_link','$short_info','$info','$edit_user','$edit_time','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailPolicyScholarship($id){
		$sql = "SELECT * FROM policy_scholarship WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editPolicyScholarship($id,$name,$name_link,$short_info,$info,$edit_user,$edit_time,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE policy_scholarship SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE policy_scholarship SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE policy_scholarship SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE policy_scholarship SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE policy_scholarship SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE policy_scholarship SET short_info='$short_info' WHERE id='$id'");
			$this->do_sql("UPDATE policy_scholarship SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE policy_scholarship SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE policy_scholarship SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deletePolicyScholarship($id){	
		$sql = "DELETE FROM policy_scholarship WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************about_scholarship**************************/
	public function AboutScholarship($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM about_scholarship ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM about_scholarship ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getAboutScholarship(){
		$sql = "SELECT * FROM about_scholarship ORDER BY id DESC";
		return $this->get_list($sql);
	}
	
	public function detailAboutScholarship($id){
		$sql = "SELECT * FROM about_scholarship WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editAboutScholarship($id,$name,$email,$phone,$title,$status,$info,$edit_user,$edit_time,$daycreate,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE about_scholarship SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE about_scholarship SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE about_scholarship SET name='$name' WHERE id='$id'");}
		if ($email != NULL) {$this->do_sql("UPDATE about_scholarship SET email='$email' WHERE id='$id'");}
		if ($phone != NULL) {	$this->do_sql("UPDATE about_scholarship SET phone='$phone' WHERE id='$id'");}
		if ($title != NULL) {$this->do_sql("UPDATE about_scholarship SET title='$title' WHERE id='$id'");}
		if ($status != NULL) {	$this->do_sql("UPDATE about_scholarship SET status='$status' WHERE id='$id'");}
			$this->do_sql("UPDATE about_scholarship SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE about_scholarship SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE about_scholarship SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteAboutScholarship($id){	
		$sql = "DELETE FROM about_scholarship WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************about_us**************************/
	public function AboutUs($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM about_us ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM about_us ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getAboutUs(){
		$sql = "SELECT * FROM about_us ORDER BY id DESC";
		return $this->get_list($sql);
	}
	
	public function detailAboutUs($id){
		$sql = "SELECT * FROM about_us WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editAboutUs($id,$id_type_care,$name,$email,$phone,$address,$title,$status,$info,$edit_user,$edit_time,$daycreate,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE about_us SET daycreate='$daycreate' WHERE id='$id'");}
		if ($id_type_care != NULL){$this->do_sql("UPDATE about_us SET id_type_care='$id_type_care' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE about_us SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE about_us SET name='$name' WHERE id='$id'");}
		if ($email != NULL) {$this->do_sql("UPDATE about_us SET email='$email' WHERE id='$id'");}
		if ($address != NULL){$this->do_sql("UPDATE about_us SET address='$address' WHERE id='$id'");}
		if ($phone != NULL) {	$this->do_sql("UPDATE about_us SET phone='$phone' WHERE id='$id'");}
		if ($title != NULL) {$this->do_sql("UPDATE about_us SET title='$title' WHERE id='$id'");}
		if ($status != NULL) {	$this->do_sql("UPDATE about_us SET status='$status' WHERE id='$id'");}
			$this->do_sql("UPDATE about_us SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE about_us SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE about_us SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteAboutUs($id){	
		$sql = "DELETE FROM about_us WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_public**************/
	public function listTypePublic($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_public ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM type_public ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypePublic(){
		$sql = "SELECT * FROM type_public";
		return $this->get_list($sql);
	}
		
	public function createTypePublic($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_public (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypePublic($id){
		$sql = "DELETE FROM type_public WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypePublic($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_public SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_public SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_public SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_public SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_public SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypePublic($id){
		$sql = "SELECT * FROM type_public WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypePublic($id){
		$sql = "SELECT * FROM type_public WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************three_public**************************/
	public function ThreePublic($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM three_public ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM three_public ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getThreePublic(){
		$sql = "SELECT * FROM three_public ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addThreePublic($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO three_public (name,name_link,info,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailThreePublic($id){
		$sql = "SELECT * FROM three_public WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editThreePublic($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active){
	
		if ($daycreate != NULL){$this->do_sql("UPDATE three_public SET daycreate='$daycreate' WHERE id='$id'");}
		
		if ($active != NULL){$this->do_sql("UPDATE three_public SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE three_public SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE three_public SET name_link='$name_link' WHERE id='$id'");}
		
			$this->do_sql("UPDATE three_public SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE three_public SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE three_public SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteThreePublic($id){	
		$sql = "DELETE FROM three_public WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_unit**************/
	public function listTypeUnit($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_unit ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM type_unit ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypeUnit(){
		$sql = "SELECT * FROM type_unit";
		return $this->get_list($sql);
	}
		
	public function createTypeUnit($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_unit (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypeUnit($id){
		$sql = "DELETE FROM type_unit WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypeUnit($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_unit SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_unit SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_unit SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_unit SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_unit SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypeUnit($id){
		$sql = "SELECT * FROM type_unit WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypeUnit($id){
		$sql = "SELECT * FROM type_unit WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/***********************unit**********************/
	public function getUnitType($id_units_type){
		$sql = "SELECT * FROM 	units WHERE id_units_type='$id_units_type'";
		return $this->get_list($sql);
		
	}
	public function listUnit($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM units";
		}else{
			$sql = "SELECT * FROM units ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getUnit(){
		$sql = "SELECT * FROM units";
		return $this->get_list($sql);
	}	
	public function createUnit($id_units_type,$name,$name_link,$image,$user_login,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO units (id_units_type,name,name_link,image,edit_user,edit_time,daycreate,active) 
		VALUES ('$id_units_type','$name','$name_link','$image','$user_login','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function updateUnit($id,$id_units_type,$name,$name_link,$image,$edit_user,$edit_time,$daycreate,$active){
		if ($name != NULL){$this->do_sql("UPDATE units SET name='$name' WHERE id='$id'");}
		if ($id_units_type != NULL){$this->do_sql("UPDATE units SET id_units_type='$id_units_type' WHERE id='$id'");}
		if ($name_link != NULL){$this->do_sql("UPDATE units SET name_docu2_link='$name_docu2_link' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE units SET image='$image' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE units SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE units SET edit_time='$edit_time' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE units SET active='$active' WHERE id='$id'");}
		if ($daycreate != NULL){$this->do_sql("UPDATE units SET daycreate='$daycreate' WHERE id='$id'");}
		return TRUE;
	}
	public function deleteUnit($id){
		$sql = "DELETE FROM units WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function detailUnit($id){
		$sql = "SELECT * FROM units WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameUnit($id){
		$sql = "SELECT * FROM type_unit WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************intro_corporate**************************/
	public function IntroCorporate($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM intro_corporate ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM intro_corporate ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getIntroCorporate(){
		$sql = "SELECT * FROM intro_corporate ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addIntroCorporate($id_unit,$name,$name_link,$image,$short_info,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO intro_corporate (id_unit,name,name_link,image,short_info,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_unit','$name','$name_link','$image','$short_info','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailIntroCorporate($id){
		$sql = "SELECT * FROM intro_corporate WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editIntroCorporate($id,$id_unit,$name,$name_link,$image,$short_info,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE intro_corporate SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE intro_corporate SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE intro_corporate SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE intro_corporate SET id_unit='$id_unit' WHERE id='$id'");
			$this->do_sql("UPDATE intro_corporate SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE intro_corporate SET name_link='$name_link' WHERE id='$id'");}
		if ($image != NULL)	{$this->do_sql("UPDATE intro_corporate SET image='$image' WHERE id='$id'");}
			$this->do_sql("UPDATE intro_corporate SET short_info='$short_info' WHERE id='$id'");
			$this->do_sql("UPDATE intro_corporate SET info='$info' WHERE id='$id'");
			$this->do_sql("UPDATE intro_corporate SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE intro_corporate SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteIntroCorporate($id){	
		$sql = "DELETE FROM intro_corporate WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************structure_corporate**************************/
	public function StructureCorporate($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM structure_corporate ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM structure_corporate ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getStructureCorporate(){
		$sql = "SELECT * FROM structure_corporate ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addStructureCorporate($id_unit,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO structure_corporate (id_unit,name,name_link,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_unit','$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailStructureCorporate($id){
		$sql = "SELECT * FROM structure_corporate WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editStructureCorporate($id,$id_unit,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE structure_corporate SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE structure_corporate SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE structure_corporate SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE structure_corporate SET id_unit='$id_unit' WHERE id='$id'");
			$this->do_sql("UPDATE structure_corporate SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE structure_corporate SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE structure_corporate SET info='$info' WHERE id='$id'");
			$this->do_sql("UPDATE structure_corporate SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE structure_corporate SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteStructureCorporate($id){	
		$sql = "DELETE FROM structure_corporate WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************typify**************************/
	public function Typify($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM typify ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM typify ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getTypify(){
		$sql = "SELECT * FROM typify ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addTypify($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO typify (name,name_link,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailTypify($id){
		$sql = "SELECT * FROM typify WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editTypify($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE typify SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE typify SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE typify SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE typify SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE typify SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE typify SET info='$info' WHERE id='$id'");
			$this->do_sql("UPDATE typify SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE typify SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteTypify($id){	
		$sql = "DELETE FROM typify WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************hochiminh**************************/
	public function HCM($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hochiminh ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM hochiminh ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getHCM(){
		$sql = "SELECT * FROM hochiminh ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addHCM($name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO hochiminh (name,name_link,info,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailHCM($id){
		$sql = "SELECT * FROM hochiminh WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editHCM($id,$name,$name_link,$info,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE hochiminh SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE hochiminh SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE hochiminh SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE hochiminh SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE hochiminh SET name_link='$name_link' WHERE id='$id'");}
			$this->do_sql("UPDATE hochiminh SET info='$info' WHERE id='$id'");
			$this->do_sql("UPDATE hochiminh SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE hochiminh SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteHCM($id){	
		$sql = "DELETE FROM hochiminh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_form**************/
	public function listTypeForm($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_form ORDER BY numbers DESC ";
		}else{
			$sql = "SELECT * FROM type_form ORDER BY numbers DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypeForm(){
		$sql = "SELECT * FROM type_form";
		return $this->get_list($sql);
	}
		
	public function createTypeForm($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_form (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypeForm($id){
		$sql = "DELETE FROM type_form WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypeForm($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_form SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_form SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_form SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_form SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_form SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypeForm($id){
		$sql = "SELECT * FROM type_form WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypeForm($id){
		$sql = "SELECT * FROM type_form WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************forms**************************/
	public function Forms($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM forms ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM forms ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getForms(){
		$sql = "SELECT * FROM forms ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addForms($id_type_form,$name,$name_link,$file,$numbers,$note,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO forms (id_type_form,name,name_link,file,numbers,note,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_type_form','$name','$name_link','$file','$numbers','$note','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailForms($id){
		$sql = "SELECT * FROM forms WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editForms($id,$id_type_form,$name,$name_link,$file,$numbers,$note,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE forms SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE forms SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE forms SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE forms SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE forms SET name_link='$name_link' WHERE id='$id'");}
		if ($note != NULL) {$this->do_sql("UPDATE forms SET note='$note' WHERE id='$id'");}
		if ($file != NULL)	$this->do_sql("UPDATE forms SET file='$file' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE forms SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE forms SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE forms SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteForms($id){	
		$sql = "DELETE FROM forms WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************share_corner**************************/
	public function ShareCorner($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM share_corner ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM share_corner ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getShareCorner(){
		$sql = "SELECT * FROM share_corner ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function addShareCorner($name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO share_corner (name,name_link,info,edit_user,edit_time,numbers,daycreate,view,active) 
		VALUES ('$name','$name_link','$info','$edit_user','$edit_time','$numbers','$daycreate','$view','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function detailShareCorner($id){
		$sql = "SELECT * FROM share_corner WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editShareCorner($id,$name,$name_link,$info,$edit_user,$edit_time,$numbers,$daycreate,$view,$active){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE share_corner SET daycreate='$daycreate' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE share_corner SET view='$view' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE share_corner SET active='$active' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE share_corner SET name='$name' WHERE id='$id'");}
		if ($name_link != NULL) {$this->do_sql("UPDATE share_corner SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL) {$this->do_sql("UPDATE share_corner SET numbers='$numbers' WHERE id='$id'");}
			$this->do_sql("UPDATE share_corner SET info='$info' WHERE id='$id'");
		if ($edit_user != NULL)	{$this->do_sql("UPDATE share_corner SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL)	{$this->do_sql("UPDATE share_corner SET edit_time='$edit_time' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteShareCorner($id){	
		$sql = "DELETE FROM share_corner WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_relation**************/
	public function listTypeRelation($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_relation ORDER BY numbers DESC ";
		}else{
			$sql = "SELECT * FROM type_relation ORDER BY numbers DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypeRelation(){
		$sql = "SELECT * FROM type_relation";
		return $this->get_list($sql);
	}
		
	public function createTypeRelation($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_relation (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypeRelation($id){
		$sql = "DELETE FROM type_relation WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypeRelation($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_relation SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_relation SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_relation SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_relation SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_relation SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypeRelation($id){
		$sql = "SELECT * FROM type_relation WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypeRelation($id){
		$sql = "SELECT * FROM type_relation WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************network_relation**************************/
	public function NetworkRelation($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM network_relation ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM network_relation ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getNetworkRelation(){
		$sql = "SELECT * FROM network_relation ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addNetworkRelation($id_type_relation,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO network_relation (id_type_relation,name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_type_relation','$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailNetworkRelation($id){
		$sql = "SELECT * FROM network_relation WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editNetworkRelation($id,$id_type_relation,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE network_relation SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE network_relation SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE network_relation SET view='$view' WHERE id='$id'");}
		if ($id_type_relation != NULL){$this->do_sql("UPDATE network_relation SET id_type_relation='$id_type_relation' WHERE id='$id'");}
			$this->do_sql("UPDATE network_relation SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE network_relation SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE network_relation SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE network_relation SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE network_relation SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE network_relation SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteNetworkRelation($id){	
		$sql = "DELETE FROM network_relation WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************program_relation**************************/
	public function ProgramRelation($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM program_relation ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM program_relation ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getProgramRelation(){
		$sql = "SELECT * FROM program_relation ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addProgramRelation($id_type_relation,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO program_relation (id_type_relation,name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$id_type_relation','$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailProgramRelation($id){
		$sql = "SELECT * FROM program_relation WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editProgramRelation($id,$id_type_relation,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE program_relation SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE program_relation SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE program_relation SET view='$view' WHERE id='$id'");}
		if ($id_type_relation != NULL){$this->do_sql("UPDATE program_relation SET id_type_relation='$id_type_relation' WHERE id='$id'");}
			$this->do_sql("UPDATE program_relation SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE program_relation SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE program_relation SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE program_relation SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE program_relation SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE program_relation SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteProgramRelation($id){	
		$sql = "DELETE FROM program_relation WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************public_national**************************/
	public function PublicNational($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM public_national ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM public_national ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getPublicNational(){
		$sql = "SELECT * FROM public_national ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addPublicNational($name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO public_national (name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailPublicNational($id){
		$sql = "SELECT * FROM public_national WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editPublicNational($id,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE public_national SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE public_national SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE public_national SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE public_national SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE public_national SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE public_national SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE public_national SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE public_national SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE public_national SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deletePublicNational($id){	
		$sql = "DELETE FROM public_national WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************list_phone**************************/
	public function ListPhone($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM list_phone ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM list_phone ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getListPhone(){
		$sql = "SELECT * FROM list_phone ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addListPhone($name,$name_link,$phone,$address,$email,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO list_phone (name,name_link,phone,address,email,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$phone','$address','$email','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailListPhone($id){
		$sql = "SELECT * FROM list_phone WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editListPhone($id,$name,$name_link,$phone,$address,$email,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE list_phone SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE list_phone SET active='$active' WHERE id='$id'");}
		if ($phone != NULL){$this->do_sql("UPDATE list_phone SET phone='$phone' WHERE id='$id'");}
		if ($address != NULL){$this->do_sql("UPDATE list_phone SET address='$address' WHERE id='$id'");}
		if ($email != NULL){$this->do_sql("UPDATE list_phone SET email='$email' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE list_phone SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE list_phone SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE list_phone SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE list_phone SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE list_phone SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE list_phone SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE list_phone SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteListPhone($id){	
		$sql = "DELETE FROM list_phone WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************standard**************************/
	public function Standard($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM standard ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM standard ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getStandard(){
		$sql = "SELECT * FROM standard ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addStandard($name,$name_link,$file,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO standard (name,name_link,file,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$file','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailStandard($id){
		$sql = "SELECT * FROM standard WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editStandard($id,$name,$name_link,$file,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE standard SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE standard SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE standard SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE standard SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE standard SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE standard SET info='$info' WHERE id='$id'");
		if ($file != NULL)	$this->do_sql("UPDATE standard SET file='$file' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE standard SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE standard SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE standard SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteStandard($id){	
		$sql = "DELETE FROM standard WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************group_teacher**************************/
	public function GroupTeacher($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM group_teacher ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM group_teacher ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getGroupTeacher(){
		$sql = "SELECT * FROM group_teacher ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addGroupTeacher($name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO group_teacher (name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailGroupTeacher($id){
		$sql = "SELECT * FROM group_teacher WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editGroupTeacher($id,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE group_teacher SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE group_teacher SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE group_teacher SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE group_teacher SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE group_teacher SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE group_teacher SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE group_teacher SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE group_teacher SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE group_teacher SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteGroupTeacher($id){	
		$sql = "DELETE FROM group_teacher WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************salary-up**************************/
	public function SalaryUp($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM salary_up ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM salary_up ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getSalaryUp(){
		$sql = "SELECT * FROM salary_up ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addSalaryUp($name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO salary_up (name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailSalaryUp($id){
		$sql = "SELECT * FROM salary_up WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editSalaryUp($id,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE salary_up SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE salary_up SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE salary_up SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE salary_up SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE salary_up SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE salary_up SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE salary_up SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE salary_up SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE salary_up SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteSalaryUp($id){	
		$sql = "DELETE FROM salary_up WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************emulation_bonus**************************/
	public function EmulationBonus($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM emulation_bonus ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM emulation_bonus ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getEmulationBonus(){
		$sql = "SELECT * FROM emulation_bonus ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addEmulationBonus($name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO emulation_bonus (name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailEmulationBonus($id){
		$sql = "SELECT * FROM emulation_bonus WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editEmulationBonus($id,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE emulation_bonus SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE emulation_bonus SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE emulation_bonus SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE emulation_bonus SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE emulation_bonus SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE emulation_bonus SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE emulation_bonus SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE emulation_bonus SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE emulation_bonus SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deleteEmulationBonus($id){	
		$sql = "DELETE FROM emulation_bonus WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*****************************************postgraduate**************************/
	public function Postgraduate($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM postgraduate ORDER BY numbers DESC";
		}else{
			$sql = "SELECT * FROM postgraduate ORDER BY numbers DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getPostgraduate(){
		$sql = "SELECT * FROM postgraduate ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function addPostgraduate($name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO postgraduate (name,name_link,info,numbers,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$name_link','$info','$numbers','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailPostgraduate($id){
		$sql = "SELECT * FROM postgraduate WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editPostgraduate($id,$name,$name_link,$info,$numbers,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE postgraduate SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE postgraduate SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE postgraduate SET view='$view' WHERE id='$id'");}
			$this->do_sql("UPDATE postgraduate SET name='$name' WHERE id='$id'");
		if ($name_link != NULL) {$this->do_sql("UPDATE postgraduate SET name_link='$name_link' WHERE id='$id'");}
		if ($info != NULL)	$this->do_sql("UPDATE postgraduate SET info='$info' WHERE id='$id'");
		if ($numbers != NULL)	$this->do_sql("UPDATE postgraduate SET numbers='$numbers' WHERE id='$id'");
			$this->do_sql("UPDATE postgraduate SET edit_user='$edit_user' WHERE id='$id'");
			$this->do_sql("UPDATE postgraduate SET edit_time='$edit_time' WHERE id='$id'");
		return TRUE;
	}
	
	public function deletePostgraduate($id){	
		$sql = "DELETE FROM postgraduate WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/*************************type_care**************/
	public function listTypeCare($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM type_care ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM type_care ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getTypeCare(){
		$sql = "SELECT * FROM type_care";
		return $this->get_list($sql);
	}
		
	public function createTypeCare($name,$name_link,$numbers,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO type_care (name,name_link,numbers,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$numbers','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteTypeCare($id){
		$sql = "DELETE FROM type_care WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateTypeCare($id,$name,$name_link,$numbers,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE type_care SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE type_care SET name_link='$name_link' WHERE id='$id'");}
		if ($numbers != NULL){$this->do_sql("UPDATE type_care SET numbers='$numbers' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE type_care SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE type_care SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailTypeCare($id){
		$sql = "SELECT * FROM type_care WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameTypeCare($id){
		$sql = "SELECT * FROM type_care WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************diploma**************************/
	public function Diploma($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM diploma ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM diploma ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getDiploma(){
		$sql = "SELECT * FROM diploma ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function getDiplomaIdTime($id_time){
		$sql = "SELECT * FROM diploma WHERE id_time=".$id_time."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdClass($id_class){
		$sql = "SELECT * FROM diploma WHERE id_class=".$id_class."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdEduPro($id_edu_pro){
		$sql = "SELECT * FROM diploma WHERE id_edu_pro=".$id_edu_pro."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdMajor($id_major){
		$sql = "SELECT * FROM diploma WHERE id_major=".$id_major."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdTimeClass($id_time,$id_class){
		$sql = "SELECT * FROM diploma WHERE id_time=".$id_time." AND id_class=".$id_class."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdTimeMajor($id_time,$id_edu_pro,$id_major){
		$sql = "SELECT * FROM diploma WHERE id_time=".$id_time." AND id_edu_pro=".$id_edu_pro." AND id_major=".$id_major."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdTimeEduProClass($id_class,$id_edu_pro,$id_major){
		$sql = "SELECT * FROM diploma WHERE id_class=".$id_class." AND id_edu_pro=".$id_edu_pro." AND id_major=".$id_major."";
		return $this->get_list($sql);
	}
	public function getDiplomaIdTimeEduProClassAll($id_time,$id_class,$id_edu_pro,$id_major){
		$sql = "SELECT * FROM diploma WHERE id_class=".$id_class." AND id_edu_pro=".$id_edu_pro." AND id_major=".$id_major." AND id_time=".$id_time."";
		return $this->get_list($sql);
	}
	public function addDiploma($name,$birthday,$birthplace,$gender,$nation,$nationality,$year_graduate,$type_graduate,$index_number,$num_register,$sign,$note,$id_edu_pro,$id_major,$id_time,$id_school_year,$id_decide,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO diploma (name,birthday,birthplace,gender,nation,nationality,year_graduate,type_graduate,index_number,num_register,sign,note,id_edu_pro,id_major,id_time,id_school_year,id_decide,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$name','$birthday','$birthplace','$gender','$nation','$nationality','$year_graduate','$type_graduate','$index_number','$num_register','$sign','$note','$id_edu_pro','$id_major','$id_time','$id_school_year','$id_decide','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function detailDiploma($id){
		$sql = "SELECT * FROM diploma WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function editDiploma($id,$name,$birthday,$birthplace,$gender,$nation,$nationality,$year_graduate,$type_graduate,$index_number,$num_register,$sign,$note,$id_edu_pro,$id_major,$id_time,$id_school_year,$id_decide,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE diploma SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE diploma SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE diploma SET view='$view' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE diploma SET name='$name' WHERE id='$id'");}
		if ($birthday != NULL){	$this->do_sql("UPDATE diploma SET birthday='$birthday' WHERE id='$id'");}
		if ($birthplace != NULL){	$this->do_sql("UPDATE diploma SET birthplace='$birthplace' WHERE id='$id'");}
		if ($gender != NULL) {$this->do_sql("UPDATE diploma SET gender='$gender' WHERE id='$id'");}
		if ($nation != NULL)	{$this->do_sql("UPDATE diploma SET nation='$nation' WHERE id='$id'");}
		if ($nationality != NULL)	{	$this->do_sql("UPDATE diploma SET nationality='$nationality' WHERE id='$id'");}
		if ($year_graduate != NULL)	{	$this->do_sql("UPDATE diploma SET year_graduate='$year_graduate' WHERE id='$id'");}
		if ($type_graduate != NULL)	{	$this->do_sql("UPDATE diploma SET type_graduate='$type_graduate' WHERE id='$id'");}
		if ($edit_time != NULL)	{	$this->do_sql("UPDATE diploma SET edit_time='$edit_time' WHERE id='$id'");}
		if ($edit_user != NULL)	{	$this->do_sql("UPDATE diploma SET edit_user='$edit_user' WHERE id='$id'");}
		if ($index_number != NULL)	{	$this->do_sql("UPDATE diploma SET index_number='$index_number' WHERE id='$id'");}
		
		if ($num_register != NULL) {$this->do_sql("UPDATE diploma SET num_register='$num_register' WHERE id='$id'");}
		if ($sign != NULL)	{$this->do_sql("UPDATE diploma SET sign='$sign' WHERE id='$id'");}
		if ($note != NULL)	{	$this->do_sql("UPDATE diploma SET note='$note' WHERE id='$id'");}
		if ($id_edu_pro != NULL)	{	$this->do_sql("UPDATE diploma SET id_edu_pro='$id_edu_pro' WHERE id='$id'");}
		if ($id_major != NULL)	{	$this->do_sql("UPDATE diploma SET id_major='$id_major' WHERE id='$id'");}
		
		if ($id_time != NULL) {$this->do_sql("UPDATE diploma SET id_time='$id_time' WHERE id='$id'");}
		if ($id_school_year != NULL)	{$this->do_sql("UPDATE diploma SET id_school_year='$id_school_year' WHERE id='$id'");}
		if ($id_decide != NULL)	{	$this->do_sql("UPDATE diploma SET id_decide='$id_decide' WHERE id='$id'");}
		return TRUE;
	}
	
	public function deleteDiploma($id){	
		$sql = "DELETE FROM diploma WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	/***********************************uploadfile**********************************/
	public function UploadFile($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM upload_f ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM upload_f ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getUploadFile(){
		$sql = "SELECT * FROM upload_f ORDER BY id_intro DESC";
		return $this->get_list($sql);
	}
	public function addUploadFile($file,$link,$edit_user,$edit_time,$daycreate){
		$file = $this->get_str($file);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO upload_f (file,link,edit_user,edit_time,daycreate) 
		VALUES ('$file','$link','$edit_user','$edit_time','$daycreate')";
		$this->do_sql($sql);
		return true;
	}
	public function detailUploadFile($id){
		$sql = "SELECT * FROM upload_f WHERE id='$id'";
		return $this->get_row($sql);
	}
	/*************************group-user**************/
	public function listGroupUser($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM group_user ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM group_user ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getGroupUser(){
		$sql = "SELECT * FROM group_user";
		return $this->get_list($sql);
	}
		
	public function createGroupUser($name,$name_link,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO group_user (name,name_link,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$name_link','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteGroupUser($id){
		$sql = "DELETE FROM group_user WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateGroupUser($id,$name,$name_link,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE group_user SET name='$name' WHERE id='$id'");}	
		if ($name_link != NULL){$this->do_sql("UPDATE group_user SET name_link='$name_link' WHERE id='$id'");}
		if ($edit_user != NULL){$this->do_sql("UPDATE group_user SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE group_user SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailGroupUser($id){
		$sql = "SELECT * FROM group_user WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameGroupUser($id){
		$sql = "SELECT * FROM group_user WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*************************************************staff***************************************/
	public function Staff($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM staff ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM staff ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}

	public function getStaff(){
		$sql = "SELECT * FROM staff ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function detailStaff($id){
		$sql = "SELECT * FROM staff WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function addStaff($username,$password,$name,$id_group_user,$short_hocvi,$birthday,$birthplace,$gender,$major,$hocvi,$hocham,$position,$field_teach,$languages,$address_work,$address_home,$phone,$image,$email,$description,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$edit_user = $this->get_str($edit_user);
		$sql = "INSERT INTO staff (username,password,name,id_group_user,short_hocvi,birthday,birthplace,gender,major,hocvi,hocham,position,field_teach,languages,address_work,address_home,phone,image,email,description,edit_user,edit_time,daycreate,active,view) 
		VALUES ('$username','$password','$name','$id_group_user','$short_hocvi','$birthday','$birthplace','$gender','$major','$hocvi','$hocham','$position','$field_teach','$languages','$address_work','$address_home','$phone','$image','$email','$description','$edit_user','$edit_time','$daycreate','$active','$view')";
		$this->do_sql($sql);
		return true;
	}
	public function editStaff($id,$username,$password,$name,$id_group_user,$short_hocvi,$birthday,$birthplace,$gender,$major,$hocvi,$hocham,$position,$field_teach,$languages,$address_work,$address_home,$phone,$image,$email,$description,$edit_user,$edit_time,$daycreate,$active,$view){
		$name = $this->get_str($name);
		$username = $this->get_str($username);
		$edit_user = $this->get_str($edit_user);
		if ($daycreate != NULL){$this->do_sql("UPDATE staff SET daycreate='$daycreate' WHERE id='$id'");}
		if ($active != NULL){$this->do_sql("UPDATE staff SET active='$active' WHERE id='$id'");}
		if ($view != NULL){$this->do_sql("UPDATE staff SET view='$view' WHERE id='$id'");}
		if ($username != NULL){$this->do_sql("UPDATE staff SET username='$username' WHERE id='$id'");}
		if ($password != NULL){	$this->do_sql("UPDATE staff SET password='$password' WHERE id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE staff SET name='$name' WHERE id='$id'");}
		if ($id_group_user != NULL){	$this->do_sql("UPDATE staff SET id_group_user='$id_group_user' WHERE id='$id'");}
		if ($short_hocvi != NULL){	$this->do_sql("UPDATE staff SET short_hocvi='$short_hocvi' WHERE id='$id'");}
		if ($birthday != NULL){	$this->do_sql("UPDATE staff SET birthday='$birthday' WHERE id='$id'");}
		if ($birthplace != NULL){	$this->do_sql("UPDATE staff SET birthplace='$birthplace' WHERE id='$id'");}
		if ($gender != NULL) {$this->do_sql("UPDATE staff SET gender='$gender' WHERE id='$id'");}
		if ($major != NULL)	{$this->do_sql("UPDATE staff SET major='$major' WHERE id='$id'");}
		if ($hocvi != NULL)	{	$this->do_sql("UPDATE staff SET hocvi='$hocvi' WHERE id='$id'");}
		if ($hocham != NULL)	{	$this->do_sql("UPDATE staff SET hocham='$hocham' WHERE id='$id'");}
		if ($field_teach != NULL)	{	$this->do_sql("UPDATE staff SET field_teach='$field_teach' WHERE id='$id'");}
		if ($edit_time != NULL)	{	$this->do_sql("UPDATE staff SET edit_time='$edit_time' WHERE id='$id'");}
		if ($edit_user != NULL)	{	$this->do_sql("UPDATE staff SET edit_user='$edit_user' WHERE id='$id'");}
		if ($languages != NULL)	{	$this->do_sql("UPDATE staff SET languages='$languages' WHERE id='$id'");}
		if ($position != NULL)	{	$this->do_sql("UPDATE staff SET position='$position' WHERE id='$id'");}
		
		if ($address_work != NULL) {$this->do_sql("UPDATE staff SET address_work='$address_work' WHERE id='$id'");}
		if ($address_home != NULL)	{$this->do_sql("UPDATE staff SET address_home='$address_home' WHERE id='$id'");}
		if ($phone != NULL)	{	$this->do_sql("UPDATE staff SET phone='$phone' WHERE id='$id'");}
		if ($image != NULL)	{	$this->do_sql("UPDATE staff SET image='$image' WHERE id='$id'");}
		if ($email != NULL)	{	$this->do_sql("UPDATE staff SET email='$email' WHERE id='$id'");}
		if ($description != NULL) {$this->do_sql("UPDATE staff SET description='$description' WHERE id='$id'");}
		return TRUE;
	}
	public function updatePassStaff($id,$password){
		if ($password != NULL) {$this->do_sql("UPDATE staff SET password='$password' WHERE id='$id'");}
		return TRUE;
	}
	public function deleteStaff($id){	
		$sql = "DELETE FROM staff WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function getNameStaff($id){
		$sql = "SELECT * FROM staff WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*************************rule**************/
	public function listRule($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM rule ORDER BY id DESC ";
		}else{
			$sql = "SELECT * FROM rule ORDER BY id DESC  LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function getRule(){
		$sql = "SELECT * FROM rule";
		return $this->get_list($sql);
	}
		
	public function createRule($name,$description,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO rule (name,description,edit_user,edit_time,daycreate,active) 
		VALUES ('$name','$description','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
	
	public function deleteRule($id){
		$sql = "DELETE FROM rule WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function updateRule($id,$name,$description,$edit_user,$edit_time,$daycreate){
		if ($name != NULL){$this->do_sql("UPDATE rule SET name='$name' WHERE id='$id'");}	
		if ($description != NULL){$this->do_sql("UPDATE rule SET description='$description' WHERE id='$id'");}	
		if ($edit_user != NULL){$this->do_sql("UPDATE rule SET edit_user='$edit_user' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE rule SET edit_time='$edit_time' WHERE id='$id'");}
		
		return TRUE;
	}
	
	public function detailRule($id){
		$sql = "SELECT * FROM rule WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function getNameRule($id){
		$sql = "SELECT * FROM rule WHERE id='$id'";
		$name = $this->get_row($sql);
		return $name['name'];
	}
	/*****************************************certificate**************************/
	public function deleteLienHe($id){
		$sql = "DELETE FROM lienhe WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
	public function LienHe($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM lienhe ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM lienhe ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	
}