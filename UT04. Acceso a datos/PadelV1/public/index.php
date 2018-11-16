<?php 
	
	spl_autoload_register(function ($class) {
    	$classPath = "./../src/";
    	require("$classPath${class}.php");
	});

	$nombrePista = $_POST["info"];
	$jugadores = ["Jugador 1","Jugador 2","Jugador 3","Jugador 4",];


	if (isset($_POST["enviar"])) {

		$nombrePista = $_POST["info"];
		$jugadores[1] = $_POST["j1"]
		$jugadores[2] = $_POST["j2"]
		$jugadores[3] = $_POST["j3"]
		$jugadores[4] = $_POST["j4"]

		$clasePadel = new clasePadel($nombrePista, $jugadores);
		
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Deportes
	</title>
</head>
<body>
	<form  action="./crear_tema.php" method="post">
		<label>
			Informacion de la clase:<input type="text" name="info">
		</label>

		<label>
			Nombre jugador 1:	<input type="text" name="j1">
		</label>
		
		<br>
		<label>
			Nombre jugador 2:	<input type="text" name="j2">
		</label>
		
		<br>
		<label>
			Nombre jugador 3:	<input type="text" name="j3">
		</label>
		
		<br>
		<label>
			Nombre jugador 4:	<input type="text" name="j4">
		</label>
		
		<br>
		
		<input type="submit" name="enviar" value="Crear tema">
</form>
</html>