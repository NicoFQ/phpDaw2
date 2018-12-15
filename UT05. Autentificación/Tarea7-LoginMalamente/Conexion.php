<?php 
	try {
	    $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
	     "admin_foro", "1234");
	    $mbd -> exec("SET CHARACTER SET utf8");

	    /* Punto de partida */

	    //$sth = null;
	    //$mbd = null;

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
 ?>