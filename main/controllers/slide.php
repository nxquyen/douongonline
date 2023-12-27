<?php
	$xuat = new Xuat;
	
	$arr_slide=$xuat->getSlide();

	require_once("main/views/slide.php");
?>