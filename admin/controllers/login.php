<?php 

if(isset($_POST['btLog'])){

	session_start(); 
	require_once("../class/function.php");
	require_once("../models/Account.php");
	$acount = new Account;
	
	if(isset($_POST['username'])){$username = trim($_POST['username']);}
		else {$username = NULL;}

	if(isset($_POST['password'])){$password = trim($_POST['password']);}
		else {$password = NULL;}
	
	if($acount->checkAccount($username,$password)){
		$_SESSION['userdouongonline'] = $acount->user; //session web
		$_SESSION['passdouongonline'] = $acount->pass;
		$_SESSION['lastlogindouongonline'] = strtotime(date("YmdHis"));
		
		if (isset($_SESSION['linkdouongonline'])&&isset($_SESSION['uriinter'])){
			$link = $_SESSION['linkdouongonline'];	
			$uri = $_SESSION['uridouongonline'];
			$linkcu =$link.''.$uri;
			echo '<script type="text/javascript">alert("Success!");window.location="main.php"; </script>';
			exit;
		}else{
			$host  = $_SERVER['HTTP_HOST'];
			$str   = explode("/",dirname($_SERVER['PHP_SELF']));
			$uri = "";
			for($i=1;$i<count($str);$i++){
				$uri= $uri . "/" . $str[$i];
			}			
			$extra = 'main.php';			
			header("Location: http://$host$uri/$extra");
			exit;
		}
	}else{
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		echo '<script type="text/javascript">alert("'.$acount->error.'");window.location ="logout.php"; </script>';
	}
	
	unset($acount);
}

