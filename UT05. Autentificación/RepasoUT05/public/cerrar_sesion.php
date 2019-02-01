<?php 
	$_SESSION = array();
	$_COOKIE = array();
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(),'',time()-666,'/');
	}
	if (isset($_COOKIE["recuerdame_id"])) {
		setcookie("recuerdame_id",'',time()-666,'/');
	}
	if (isset($_COOKIE["recuerdame_ik"])) {
		setcookie("recuerdame_ik",'',time()-666,'/');
	}
	session_unset();
	session_destroy();
	header('Location: ./index.php');
	die();
?>