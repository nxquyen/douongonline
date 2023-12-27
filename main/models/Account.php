<?php
require "Database.php";

class Account extends Database
{
	var $error;
	var $user;
	var $pass;
    
    // Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }
     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	// Kiem tra dang nhap
	public function checkAccount($username,$password){
		$this->user = $this->get_str($username);
		$this->pass = $this->get_str($password);
				$sql = "SELECT * FROM users WHERE username='".$this->user."'";
				$kq = $this->get_row($sql);
				if($kq['password']==md5($this->pass)){
					return TRUE;
				}else{
					$this->error = "Tài khoản không chính xác!";
					return FALSE;
				}
			
	}
    function ktchuoi($str,$min=0,$max=0){
		$sl = strlen($str);
		if($max==0){
			if($sl>=$min){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			if($sl>=$min && $sl<=$max){
				return TRUE;
			}else{
				return FALSE;
			}
		
		}
	}
    // Lấy chi tiết TK
	public function getAccount($username){
		$sql = "SELECT * FROM users WHERE username='".$username."'";
		$kq = $this->get_row($sql);
		return $kq;
	}
	//Update manager
	public function updateAccount($account,$password){
		if ($password != NULL){$this->do_sql("UPDATE users SET password='$password' WHERE username='$account'");}
		return TRUE;
	}
	
	
	
	// Lấy chi tiết TK
	public function getAccountID($id){
		$sql = "SELECT * FROM staff WHERE id='$id'";
		$kq = $this->get_row($sql);
		return $kq;
	}
}

