<?php
$tintuc = new TinTuc;

if(isset($_GET['num'])==true){

	$num = $_GET['num'];

}else{

	$num = 1;

}
	$flag =0;
	
	
	if(isset($_POST['btnHuy'])==true){
		$flag = 2;	
		$arrayID = $_POST["arrayID"]; 
		$n = count($arrayID);
		if($n>0){
			for($i=0;$i<$n;$i++){
				$tintuc->deleteDonHang($arrayID[$id]);
			}
			$flag = 1;
		}		
	}



	$array_dh = $tintuc->dsdonhang(0,0);
	$sum = count($array_dh);
	$limit = 10;
	$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
	$start = ($num-1)*$limit;
	$array_dh = $tintuc->dsdonhang($start,$limit);



require_once('../views/qldonhang/dsdonhang.php');
?>