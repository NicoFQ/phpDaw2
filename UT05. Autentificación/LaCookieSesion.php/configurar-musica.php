<!DOCTYPE html>
<html>
<head>
	<title>
		Configuraciones musicales
	</title>
</head>
<body>
	<h2>Elige los tipos de musica que mas te gustan</h2>
 	<form action="Configura-datos.php" method="post">
 		<label>Pop: <input type="checkbox" name="tipoMusica[]" value="Pop"></label><br>
 		<label>Rock: <input type="checkbox" name="tipoMusica[]" value="Rock"></label><br>
 		<label>Punk: <input type="checkbox" name="tipoMusica[]" value="Punk"></label><br>
 		<label>Rap: <input type="checkbox" name="tipoMusica[]" value="Rap"></label><br>
 		<label>Tango: <input type="checkbox" name="tipoMusica[]" value="Tango"></label><br>
 		<label>Jazz: <input type="checkbox" name="tipoMusica[]" value="Jazz"></label><br>
 		<label>Trap: <input type="checkbox" name="tipoMusica[]" value="Trap"></label><br>
 		<input type="submit" name="enviaNombre" value="Establecer preferencias">
 	</form>
</body>
</html>