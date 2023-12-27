<?php
class Xuat extends Database
{
    var $error;
	private $conn; 
    // Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }
     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
     
    // Hàm thêm mới
    function add_new($data){
        return parent::insert($this->_table_name, $data);
    }
 
    // Hàm xóa theo id
    function delete_by_id($id){
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
 
    // Hàm cập nhật theo id
    function update_by_id($data, $id){
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
 
    // Hàm select theo id
    function select_by_id($select, $id){
        $sql = "select $select from ".$this->_table_name." where ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
	
	// getslide
	function getSlide(){
		$sql = "SELECT * FROM slide ORDER BY numbers DESC";
		return $this->get_list($sql);
	}
	public function getAccount($username){
		$sql = "SELECT * FROM users WHERE username='".$username."'";
		$kq = $this->get_row($sql);
		return $kq;
	}
	

	
	/*********************************video***********************************/
	function getListVideo(){
		$sql = "SELECT * FROM video ORDER BY id DESC";
		return $this->get_list($sql);
	}
	function listVideo($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM video  ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM video  ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		$result = $this->get_list($sql);
		return $result;
	}
	function getDetailVideo($id){
		$sql = 'SELECT * FROM video WHERE id='.$id.'';
		$result = $this->get_row($sql);
		$this->do_sql("UPDATE video SET view=view+1 WHERE id='$id'");
		return $result;
	}
	/*********************************San Phẩm Và Danh Mục***********************************/
	function DanhMucSP($start,$limit,$id_danhmuc){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sanpham  WHERE id_danhmuc = '$id_danhmuc' ORDER BY id ASC";
		}else{
			$sql = "SELECT * FROM sanpham  WHERE id_danhmuc = '$id_danhmuc' ORDER BY id ASC LIMIT ".$start.", ".$limit;
		}
		$result = $this->get_list($sql);
		return $result;
	}
	function SanPham($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sanpham  ORDER BY id DESC";
		}else{
			$sql = "SELECT * FROM sanpham  ORDER BY id DESC LIMIT ".$start.", ".$limit;
		}
		$result = $this->get_list($sql);
		return $result;
	}
	
	
	function detailSanPham($id){
		$sql = "SELECT * FROM sanpham where id='$id'";
		$result = $this->get_row($sql);
		$this->do_sql("UPDATE sanpham SET view=view+1 WHERE id='$id'");
		return $result;
	}
	function detailDanhMuc($id){
		$sql = "SELECT * FROM danhmuc where id='$id'";
		$result = $this->get_row($sql);
		return $result;
	}
	function DanhMuc(){
		$sql = "SELECT * FROM DanhMuc ORDER BY id ";
		return $this->get_list($sql);
	}
	
	function detailUsers($username){
		$sql = "SELECT * FROM users where username='$username'";
		$result = $this->get_row($sql);
		return $result;
	}
	function listDanhMucSP($idloai){
		$sql = "SELECT * FROM sanpham  WHERE id_danhmuc = '$idloai' ORDER BY id ";
		$result = $this->get_list($sql);
		return $result;
	}
	
	/********************************Đơn Hàng***************************************/
	public function addDonHang($id_khach,$edit_time,$tinhtrang){
		$sql = "INSERT INTO donhang (id_khach,edit_time,tinhtrang) 
		VALUES ('$id_khach','$edit_time','$tinhtrang')";
		$this->do_sql($sql);
		return true;
	}
	public function addCTDonHang($id_sp,$gia,$id_dh){
		$sql = "INSERT INTO donhang (id_sp,soluong,id_dh) 
		VALUES ('$id_sp','$soluong','$id_dh')";
		$this->do_sql($sql);
		return true;
	}
	public function addGioHang($id_user,$product_id,$soluong){
		$sql = "INSERT INTO giohang (id_user,product_id,soluong) 
		VALUES ('$id_user','$product_id','$soluong')";
		$this->do_sql($sql);
		return true;
	}
	public function getAllProducts() {
        // Thực hiện truy vấn lấy danh sách sản phẩm từ CSDL
        $sql = "SELECT * FROM sanpham";
        $result = $this->do_sql($sql);
		if ($result === false) {
            // Truy vấn SQL không thành công
            echo "Truy vấn SQL không thành công.";
            return;  // Kết thúc phương thức
        }
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }
	public function addToCart($productID,$user_id) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $sql = "SELECT * FROM cart WHERE product_id = '$productID'";
        $result = $this->do_sql($sql);

        if ($result->num_rows > 0) {
            // Sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $sql = "UPDATE cart SET quantity = quantity + 1 WHERE product_id = '$productID'";
            $this->do_sql($sql);
        } else {
            // Sản phẩm chưa có trong giỏ hàng, thêm mới
            $sql = "INSERT INTO cart (product_id, quantity,user_id) VALUES ('$productID', 1,'$user_id')";
            $this->do_sql($sql);
        }
    }

    public function getCartItems() {
        // Lấy danh sách sản phẩm trong giỏ hàng
        $sql = "SELECT cart.product_id, sanpham.tensanpham, sanpham.hinhanh,sanpham.giaca, cart.quantity FROM cart
                  INNER JOIN sanpham ON cart.product_id = sanpham.id";
        $result = $this->do_sql($sql);
        $cartItems = [];
        while ($row = $result->fetch_assoc()) {
            $cartItems[] = $row;
        }

        return $cartItems;
    }
	
	
}


