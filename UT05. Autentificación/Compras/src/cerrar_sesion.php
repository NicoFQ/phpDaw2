<?php 
	session_start();
	if (isset($_COOKIE['PHPSESSID'])) {
		unset($_COOKIE['PHPSESSID']);
		setcookie('PHPSESSID','',1,"/");
	}
	if (isset($_COOKIE["recuerdo_id"])) {
		unset($_COOKIE['recuerdo_id']);
		setcookie("recuerdo_id",'0',1,"/");
	}
	if (isset($_COOKIE["recuerdo_ik"])) {
		unset($_COOKIE['recuerdo_ik']);
		setcookie("recuerdo_ik",'0',1,"/");
	}
	session_destroy();
	session_unset();
	header('Location: ./../public/login.php');
	die();
?>