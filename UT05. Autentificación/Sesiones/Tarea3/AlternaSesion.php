<?php
	

	/* Multiples sesiones 
	session_name("SES_1");
	session_start();
	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 20;
	}else{
		$_SESSION['valor'] = 10;
	}
	$tmp1 = $_SESSION['valor'];
	session_write_close();
	session_name("SES_2");

	//Importante
	session_id(session_create_id());
	session_start();
	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 10;
	}else{
		$_SESSION['valor'] = 20;
	}
	$tmp2 = $_SESSION['valor'];

	if (isset($_COOKIE["contador"])) {
		$numVisita = $_COOKIE["contador"]++;
		++$numVisita;
		setcookie("contador",$numVisita,time()+500);
	}else{
		$numVisita=1;
		setcookie("contador",$numVisita,time()+500);
	}
	print_r($_SESSION);

	echo "Visita $numVisita, en sesion SES_1 valor $tmp1 y en sesion SES_2 valor $tmp2";
*/


	/* Multiples sesiones */
	session_id(session_create_id());
	session_name("ASD");
	session_start();
	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 20;
	}
	$tmp1 = $_SESSION['valor'];

	session_write_close();


	session_name("DSA");

	//Importante
	session_id(session_create_id());
	session_start();

	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 10;
	}
	$tmp2 = $_SESSION['valor'];

	echo "Sesión ASD tiene valor $tmp1<br>";
	echo "Sesión DSA tiene valor $tmp2<br>";
	print_r($_COOKIE)

?>