<?php 
	
		try {
	    $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
	     "admin_foro", "1234");
	    $mbd -> exec("SET CHARACTER SET utf8");



		$sentencia = $mbd->prepare("select * from tema, respuesta where tema.id_tema = respuesta.id_tema;");
		$sentencia->execute();
		
		while ($datos = $sentencia->fetch(PDO::FETCH_ASSOC)) {
	    	echo $datos["id_tema"];
	    	echo "<br>";
	    	echo "<br>";
			
		}


	    $sth = null;
	    $mbd = null;

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}


 ?>