<?php
class Database
{
    private $__conn;
	
    // Hàm Kết Nối
    function connect()
    {
        if (!$this->__conn){
            $this->__conn = mysqli_connect('localhost', 'root', '', 'douongonline') or die ('Lỗi kết nối');
           mysqli_query($this->__conn, "SET character_set_results = 'UTF-8', character_set_client = 'UTF-8', character_set_database = 'UTF-8', character_set_server = 'UTF-8'");
        }
    }
 
    // Hàm Ngắt Kết Nối
    function dis_connect(){
        if ($this->__conn){
            mysqli_close($this->__conn);
        }
    }
 
    // Hàm thuc hien truy van
    function do_sql($sql)
    {
        $this->connect();
        return mysqli_query($this->__conn, $sql);
    }
	
	// Hàm injection
    function get_str($str)
    {
        $this->connect();
        return mysqli_real_escape_string($this->__conn, $str);
    }
 
    // Hàm lấy danh sách
    function get_list($sql)
    {
        $this->connect();         
        $result = mysqli_query($this->__conn, $sql); 
 
        $return = array();
 
		// Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)){
            $return[] = $row;
        }

		// Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);

        return $return;
    }
 
    // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
    function get_row($sql)
    {
        $this->connect();         
        $result = mysqli_query($this->__conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
 
        if($row){
			return $row;
        } 
        return false;
    }
    
}