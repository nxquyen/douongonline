<?php
function gioihanchu($str,$sl){
	$arr = explode(" ",$str);
	$n = count($arr);
	$kq = "";
	if ($n>$sl){	
		for($i=0;$i<$sl;$i++){
			$kq.= $arr[$i].' ';
		}
		$kq.= '...';
	}else{
		for($i=0;$i<$n;$i++){
			$kq.= $arr[$i].' ';
		}
	}
	return $kq;
}
function xlID($id){
	$n = strlen($id);
	$n = 5 - $n;
	$kq = '';
	for($i=0;$i<$n;$i++){
		$kq .= '0';
	}
	$kq .= $id;
	return $kq;
}

function khtr($name){
	$n = strlen($name);
	$kq = '';
	for($i=0;$i<$n;$i++){
		if($name[$i]!=' '){$kq .= $name[$i];}
	}
	return $kq;
}

function ktngaythang($str){
	$pattern = '/^[0-9][0-9\-]+[0-9]$/';
	if(preg_match($pattern,$str)){
		return TRUE;
	}else{
		return FALSE;
	}
	$arr = explode("-",$str);
	$month = $arr[1];
	$day = $arr[0];
	$year = $arr[2];
	if(checkdate($month,$day,$year)){
		return TRUE;
	}else{
		return FALSE;
	}
}


function ktemail($str){
	$pattern = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/";
	if(preg_match($pattern,$str)){
		return TRUE;
	}else{
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

function check($a){
	echo '<script type="text/javascript">alert("'.$a.'");</script>';
}


function gia($num,$s,$t=""){
	if($num==0){
		$str = 'Liên hệ';
	}else{
		$str = number_format($num,0,'',$s);
		$str .= " ".$t;
	}
	return $str;
}

function chuyenChuoi($str) {
	
     $str = preg_replace("/(á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ)/", 'a', $str);
     $str = preg_replace("/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ)/", 'e', $str);
     $str = preg_replace("/(i|í|ì|ỉ|ĩ|ị)/", 'i', $str);
     $str = preg_replace("/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ)/", 'o', $str);
     $str = preg_replace("/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự)/", 'u', $str);
     $str = preg_replace("/(ý|ỳ|ỷ|ỹ|ỵ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);	 
	 $str = preg_replace("/(\`|\~|\#|\!|\@|\|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\\|\?|\>|\<|\“|\”|\'|\’|\‘|\‘|\:|\;|\_|\"|\")/", '',$str);

     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
     $str = preg_replace("/(Đ)/", 'D', $str);

     return $str; // Trả về chuỗi đã chuyển

}
function ChangeToSlugChuan($str) {
	
     $str = preg_replace("/(á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ)/", 'a', $str);
     $str = preg_replace("/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ)/", 'e', $str);
     $str = preg_replace("/(i|í|ì|ỉ|ĩ|ị)/", 'i', $str);
     $str = preg_replace("/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ)/", 'o', $str);
     $str = preg_replace("/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự)/", 'u', $str);
     $str = preg_replace("/(ý|ỳ|ỷ|ỹ|ỵ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);	 
	 $str = preg_replace("/(\`|\~|\#|\!|\@|\|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\\|\?|\>|\<|\“|\”|\'|\’|\‘|\‘|\:|\;|\_|\"|\")/", '',$str);

     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
     $str = preg_replace("/(Đ)/", 'd', $str);
     $str = preg_replace("/( )/", "-",$str);
	 $str = preg_replace("/(\-\-\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-)/", "-",$str);
	 $str = preg_replace("/(\@\-|\-\@|\@)/", "-",$str);
     return $str; // Trả về chuỗi đã chuyển


}
function ChangeToSlug($str) {
	 $str=strtolower($str);
     $str = preg_replace("/(á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ)/", 'a', $str);
     $str = preg_replace("/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ)/", 'e', $str);
     $str = preg_replace("/(i|í|ì|ỉ|ĩ|ị)/", 'i', $str);
     $str = preg_replace("/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ)/", 'o', $str);
     $str = preg_replace("/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự)/", 'u', $str);
     $str = preg_replace("/(ý|ỳ|ỷ|ỹ|ỵ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);	 
	 $str = preg_replace("/(\`|\~|\#|\!|\@|\|\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\\|\?|\>|\<|\“|\”|\'|\’|\‘|\‘|\:|\;|\_|\"|\")/", '',$str);
	 $str = preg_replace("/( )/", "-",$str);
	 $str = preg_replace("/(\-\-\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-\-)/", "-",$str);
	 $str = preg_replace("/(\-\-)/", "-",$str);
	 $str = preg_replace("/(\@\-|\-\@|\@)/", "-",$str);
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    
     return $str; // Trả về chuỗi đã chuyển
}
function ngaythang($str){
	$arr = explode("-",$str);
	$kq = $arr[2]."-".$arr[1]."-".$arr[0];
	return $kq;
}
function datetimevn($str){
	$item = explode(" ",$str);
	$item_date= explode("-",$item[0]);
	$kq =$item[1]." ".$item_date[2]."-".$item_date[1]."-".$item_date[0];
	return $kq;
}
