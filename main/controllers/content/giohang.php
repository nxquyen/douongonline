<?php

$xuat = new Xuat;
$cartItems = $xuat->getCartItems();

if (isset($_SESSION['userdouongonline'])) {
    // Đã đăng nhập
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productID = $_POST['productID'];
		$user_login = $_SESSION['userdouongonline'];
        $row_acc = $userr->getAccount($user_login);
		$user_id = $row_acc['id'];
		$flag=1; $error = "";
		
		if($flag){
			$xuat->addToCart($productID,$user_id);
			echo '<script type="text/javascript">alert("Thêm vào giỏ hàng thành công!");
			</script>';
			require_once("main/views/content/giohang.php"); 
			header("Location: giohang.php");
			exit();
		}else{
			echo '<script type="text/javascript">alert("'.$error.'");</script>';
		}
    }
} else {
    // Chưa đăng nhập, trả về phản hồi lỗi
    echo'<script type="text/javascript">alert("Cần đăng nhập để thêm sản phẩm!");</script>';
}



