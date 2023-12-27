<?php
$tintuc = new TinTuc;
require ("checklogin.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$tintuc->deleteTaiKhoan($id);
echo '<script type="text/javascript">alert("Xóa thành công!");window.location ="main.php?act=qltaikhoan.html"; </script>';
unset($tintuc);

?>