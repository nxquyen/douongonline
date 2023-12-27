<?php
$tintuc = new TinTuc;
require ("checklogin.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else{
    $id=0;
}
$tintuc->deleteDanhMuc($id);
echo '<script type="text/javascript">alert("Xóa thành công!");window.location ="main.php?act=qldanhmuc.html"; </script>';
unset($tintuc);

?>