<?php 
	
	include("./../src/registro_datos.php");
	$email = "";
	$usuario = "";
	$contrasena = "";
	$direccion = "";
	$errores = [];

	if (count($_POST) > 0) {
		if (!empty($_POST["email"])) {
			$email = $_POST["email"];
		}else{
			$errores[] = "Email invalido";
		}
		if (!empty($_POST["usuario"])) {
			$usuario = $_POST["usuario"];
		}else{
			$errores[] = "Usuario invalido";
		}
		if (!empty($_POST["contrasena"])) {
			$contrasena = $_POST["contrasena"];
		} else{
			$errores[] = "Contraseña invalida";
		}	
		if (!empty($_POST["direccion"])) {
			$direccion = $_POST["direccion"];
		}else{
			$errores[] = "Direccion erronea";
		}
		if (count($errores) === 0) {
			$errores[] = insertaDatos($usuario, $email, $contrasena, $direccion);
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<form action="registro.php" method="POST">
		<label>
	 		Email:
	 		<input type="text" name="email" value="<?=$email?>">
	 	</label>
	 	<br>
	 	<label>
	 		Nombre Usuario:
 			<input type="text" name="usuario" value="<?=$usuario?>">
 		</label>
 		<br>
 		<label>
 			Contraseña: 
	 		<input type="password" name="contrasena">
 		</label>
 		<br>
 		<label>
 			Direccion: 
	 		<input type="text" name="direccion" value="<?=$direccion?>">
 		</label>
 		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php for ($i=0; $i < count($errores); $i++) { 
		echo $errores[$i];
		echo "<br>";
	} ?>
</body>
</html>