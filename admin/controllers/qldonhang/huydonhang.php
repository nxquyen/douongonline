<?php
$tintuc = new TinTuc;
require ("checklogin.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$tintuc->deleteDonHang($id);
echo '<script type="text/javascript">alert("Hủy Đơn thành công!");window.location ="main.php?act=qldonhang.html"; </script>';
unset($tintuc);

?>