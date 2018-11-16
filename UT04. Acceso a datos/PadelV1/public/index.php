<?php 
	
	spl_autoload_register(function ($class) {
    	$classPath = "./../src/";
    	require("$classPath${class}.php");
	});

	
	$jugadores = [];


	if (isset($_POST["enviar"])) {

		$con = ConexionPadel::getInstance();

		$nombrePista = $_POST["info"];

		$jugadores[0] = new Jugador($_POST["j1n"],$_POST["j1a"],$_POST["j1r"]);
		$jugadores[1] = new Jugador($_POST["j2n"],$_POST["j2a"],$_POST["j2r"]);
		$jugadores[2] = new Jugador($_POST["j3n"],$_POST["j3a"],$_POST["j3r"]);
		$jugadores[3] = new Jugador($_POST["j4n"],$_POST["j4a"],$_POST["j4r"]);

		$clasePadel = new ClasePadel($nombrePista, $jugadores);


		$con->insertaDatos($_POST["info"], $clasePadel->serializarJugadores());



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
	<form  action="./index.php" method="post">
		<label>
			Informacion de la clase:<input type="text" name="info">
		</label>
		<br>

		<label>
			Nombre jugador 1:	<input type="text" name="j1n">
		</label>
		<br>

		<label>
			Apellido jugador 1:	<input type="text" name="j1a">
		</label>
		<br>
	
		<label>
			Nivel jugador 1:	<input type="range" max=6  name="j1r">
		</label>
		<br>
	
		
		<br>
		<label>
			Nombre jugador 2:	<input type="text" name="j2n">
		</label>
		<br>
		
		<label>
			Apellido jugador 2:	<input type="text" name="j2a">
		</label>
		<br>
	
		<label>
			Nivel jugador 2:	<input type="range" max=6  name="j2r">
		</label>
		<br>
	

		<br>
		<label>
			Nombre jugador 3:	<input type="text" name="j3n">
		</label>
		<br>
		
		<label>
			Apellido jugador 3:	<input type="text" name="j3a">
		</label>
		<br>
	
		<label>
			Nivel jugador 3:	<input type="range" max=6  name="j3r">
		</label>
		<br>
	

		<br>
		<label>
			Nombre jugador 4:	<input type="text" name="j4n">
		</label>
		<br>
		
		<label>
			Apellido jugador 4:	<input type="text" name="j4a">
		</label>
		<br>
	
		<label>
			Nivel jugador 4:	<input type="range" max=6  name="j4r">
		</label>
		<br>
	
		<br>
		
		<input type="submit" name="enviar" value="Solicitar clase">
</form>
</html>