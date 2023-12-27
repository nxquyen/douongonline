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
		if(ktchuoi($this->user,4,30) && ktchuoi($this->pass,4,30)){
				$sql = "SELECT * FROM users WHERE username='".$this->user."'";
				$kq = $this->get_row($sql);
				if($kq['password']==md5($this->pass)){
					return TRUE;
				}else{
					$this->error = "Tài khoản không chính xác!";
					return FALSE;
				}
			
		}
	}
     
    // Lấy chi tiết TK
	public function getAccount($username){
		$this->user = $this->get_str($username);
		$sql = "SELECT * FROM admin WHERE username='".$this->user."'";
		$kq = $this->get_row($sql);
		return $kq;
	}
	//Update manager
	public function updateAccount($account,$password){
		if ($password != NULL){$this->do_sql("UPDATE admin SET password='$password' WHERE username='$account'");}
		return TRUE;
	}
	
	
	//get list manager
	public function getList($table,$start,$limit,$order="username",$asc="ASC"){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM $table";
		}else{
			$sql = "SELECT * FROM $table ORDER BY $order $asc LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	// Lấy chi tiết TK
	public function getAccountID($id){
		$sql = "SELECT * FROM admin WHERE id='$id'";
		$kq = $this->get_row($sql);
		return $kq;
	}
	public function updateAccountUser($id,$username,$password,$name,$quyen,$image,$user_login,$edit_time){
		if ($password != NULL){$this->do_sql("UPDATE admin SET password='$password' WHERE  id='$id'");}
		if ($name != NULL){$this->do_sql("UPDATE admin SET name='$name' WHERE id='$id'");}
		if ($username != NULL){$this->do_sql("UPDATE admin SET username='$username' WHERE  id='$id'");}
		if ($quyen != NULL){$this->do_sql("UPDATE admin SET idrole='$quyen' WHERE id='$id'");}
		if ($image != NULL){$this->do_sql("UPDATE admin SET image='$image' WHERE id='$id'");}
		if ($edit_time != NULL){$this->do_sql("UPDATE admin SET edit_time='$edit_time' WHERE  id='$id'");}
		if ($user_login != NULL){$this->do_sql("UPDATE admin SET edit_user='$user_login' WHERE  id='$id'");}
		return TRUE;
	}
	//Delete account
	public function deleteAccount($id,$table){
		$sql = "DELETE FROM $table WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function checkCreateUser($account,$table){
		$sql = "SELECT username FROM $table where username='$account'";
		$result = $this->do_sql($sql);
		if(mysqli_num_rows($result)<=0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	//Create manager
	//Create manager
	public function createAccount($account,$password,$name,$quyen,$image,$edit_user,$edit_time,$daycreate,$active){
		$sql = "INSERT INTO admin (username,password,name,idrole,image,edit_user,edit_time,daycreate,active) 
		VALUES ('$account','$password','$name','$quyen','$image','$edit_user','$edit_time','$daycreate','$active')";
		$this->do_sql($sql);
		return true;
	}
}

