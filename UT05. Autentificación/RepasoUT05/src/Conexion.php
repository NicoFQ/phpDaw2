<?php 
	try {
	    $pdo = new PDO('mysql:host=localhost;dbname=proyecto_padel',
	     "admin_padel", "1234");
	    $pdo -> exec("SET CHARACTER SET utf8");

	    /* Punto de partida */
	    

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
 ?>