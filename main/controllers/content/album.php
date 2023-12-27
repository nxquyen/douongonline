<?php
$xuat = new Xuat;

$arr_album=$xuat->getAlbum();

require_once("main/views/content/album.php");

unset($xuat);