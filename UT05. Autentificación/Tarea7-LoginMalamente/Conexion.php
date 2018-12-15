<?php 
	$user = "admon";
	$mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
	     "$user", "1234");
	    $mbd -> exec("SET CHARACTER SET utf8");
	


 ?>