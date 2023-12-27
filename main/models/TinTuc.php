<?php
class TinTuc extends Database{
	var $user;
	var $error;

    function __construct() {
        parent::connect();
    }
     
    function __destruct() {
        parent::dis_connect();
    }

}