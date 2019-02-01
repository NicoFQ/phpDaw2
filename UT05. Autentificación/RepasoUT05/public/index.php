<?php 
	include("./../src/inicia_sesion.php");
	$usuario = "";
	$contrasena = "";
	$recuerdame = false;
	$errores = [];

	if (isset($_POST["enviar"])) {
		if (!empty($_POST["usuario"])) {
			$usuario = $_POST["usuario"];
		}else{
			$errores[] = "Usuario vacio";
		}
		if (!empty($_POST["contrasena"])) {
			$contrasena = $_POST["contrasena"];
		}else{
			$errores[] = "Contraseña vacia";
		}	
		if (count($errores) === 0) {
			if (isset($_POST["recuerdame"])) {
				$recuerdame = true;
			}
			$errores = inicia_sesion($usuario, $contrasena, $recuerdame);
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<form action="index.php" method="post">
 		<label>
 			Usuario o email: 
 			<input type="text" name="usuario" value="<?=$usuario?>">
 		</label>
 		<br>
 		<label>
 			Contraseña: 
	 		<input type="password" name="contrasena">
 		</label>
 		<br>
 		<input type="submit" name="enviar" value="Entrar">
 		<br>
 		Recuerdame
 		<input type="checkbox" name="recuerdame" value="true">
 	</form>
 	<a href="restableceConstrasena.php">Restablece tu contraseña</a>
 	<br>
 	<a href="registro.php">Registrate</a>
 	<br>

 	<?php for ($i=0; $i < count($errores); $i++) { ?>
 		<p style="color:red;"><?=$errores[$i] ?></p>
 	<?php } ?>

 </body>
 </html>