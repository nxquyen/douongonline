<?php
  
  $now = strtotime(date("YmdHis"));
  if ((isset($_SESSION['lastlogindouongonline'])&&(($now - $_SESSION['lastlogindouongonline']) > 100000))) {
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	unset($_SESSION['userdouongonline']);
	unset($_SESSION['passdouongonline']);
	unset($_SESSION['lastlogindouongonline']);
	echo '<script type="text/javascript">alert("Mời bạn đăng nhập lại.");window.location ="http://localhost/douongonline/admin"; </script>';
	exit;	
  }

  if (!isset($_SESSION['userdouongonline']) || !isset($_SESSION['passdouongonline'])){
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<script type="text/javascript">alert("Mời bạn đăng nhập lại.");window.location ="http://localhost/douongonline/admin"; </script>';
	exit;	
  }else{
	require_once("../class/function.php");
	require_once("../models/Account.php");
	$acount = new Account;
	if(!$acount->checkAccount($_SESSION['userdouongonline'],$_SESSION['passdouongonline'])){
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		echo '<script type="text/javascript">alert("'.$acount->error.'");window.location ="logout.php"; </script>';
	}
	unset($acount);
  }