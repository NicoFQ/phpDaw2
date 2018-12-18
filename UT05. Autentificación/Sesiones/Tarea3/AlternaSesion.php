<?php
	

	/* Multiples sesiones */
	//session_name("ASD");
	//session_start();
	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 20;
	}
	$tmp1 = $_SESSION['valor'];
	//session_write_close();
	//session_name("DSA");

	//Importante
	//session_id(session_create_id());
	//session_start();
	if(!isset($_SESSION['valor'])) {
	  $_SESSION['valor'] = 10;
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

	echo "Visita $numVisita, en sesion ASD valor $tmp1 y en sesion DSA valor $tmp2";
?>