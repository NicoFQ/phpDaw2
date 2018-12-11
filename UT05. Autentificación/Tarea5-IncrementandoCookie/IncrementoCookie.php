<?php 
	$cont = 0;
	if (isset($_COOKIE["contador"])) {
		$cont = $_COOKIE["contador"];
		setcookie("contador", ++$cont, time()+100);
		echo "Contador: " . $_COOKIE["contador"];
	}else{
		setcookie("contador",1, time()+1000);
	}

 ?>