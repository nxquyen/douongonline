<?php
$tintuc = new TinTuc;


if(isset($_GET['num'])==true){

	$num = $_GET['num'];

}else{

	$num = 1;

}
	$flag =0;
	
	if(isset($_POST['btnXoa'])==true){
		$flag = 2;	
		$arrayID = $_POST["arrayID"]; 
		$n = count($arrayID);
		if($n>0){
			for($i=0;$i<$n;$i++){
				$tintuc->deleteTaiKhoan($arrayID[$i]);
			}
			$flag = 1;
		}		
	}

	$array_tk = $tintuc->dstaikhoan(0,0);
	$sum = count($array_tk);
	$limit = 10;
	$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
	$start = ($num-1)*$limit;
	$array_tk = $tintuc->dstaikhoan($start,$limit);


require_once('../views/qltaikhoan/dstaikhoan.php');
?>