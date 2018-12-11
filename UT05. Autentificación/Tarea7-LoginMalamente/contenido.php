<?php 





// Tarea7-LoginMalamente.php 
	require_once("Conexion.php");
	$usuario = "";
	$contrasena = "";
	$nombreUsuario = "";
	$errores = [];

	// Tiempo de vida de la cookie en segundos.
	$vidaCookie = 200; 
	
	if (isset($_POST["salir"])) {
		setcookie("usuario", "", 0);
		header("Location: Tarea7-LoginMalamente.php");	
	}

	if (isset($_POST["enviar"])) { 

		if ($_POST["usuario"] === "") 
			$errores[] = "Nombre de usuario vacio";
		else
			$usuario = $_POST["usuario"];

		if ($_POST["contrasena"] === "") 
			$errores[] = "Campo de contraseña vacio";
		else
			$contrasena = $_POST["contrasena"];
		
		if (count($errores)===0) {
			/** 
			* Si no se ha producido ningun error en los datos
			* se procede a la consulta del usuario.
			*/
			$sentencia = $mbd->prepare("select nombre from user where nombreUsuario = ? and contrasena = ?;");
			$sentencia->execute(array($usuario, $contrasena));

			// Se recoge el primer indice de la consulta que será el usuario.
			$nombreUsuario = $sentencia->fetch()[0]; 
			
			//sprint_r($sentencia->errorInfo());
			//var_dump($nombreUsuario);
			/**
			* En caso de no se haya recuperado ningun registro con las credenciales
			* que proporciona el usuario se redirige a la pagina de login con los 
			* errores
			**/
			if (!$nombreUsuario) {
				$errores[] = "El usuario o la contraseña son incorrectos.";
				$errores = serialize($errores);
				header("Location: Tarea7-LoginMalamente.php?err=$errores");	
				die();
			}
			/**
			* Si todo ha ido bien se establece una cookie con el nombre
			* de usuario y se cierra la conexion con la base de datos.
			**/
			setcookie("usuario",$usuario, time()+$vidaCookie);
			$sentencia = null;
	    	$mbd = null;
			header("Location: $argv[0]");	
		}else{
			/**
			* Si se ha producido algun error de redirige al login 
			*con los errores.
			**/
			$errores = serialize($errores);
			header("Location: Tarea7-LoginMalamente.php?err=$errores");
		}
	}else{
	/**
	* Si no viene desde el formulario se pasa a preguntar
	* si tiene alguna cookie para mantener su sesion en caso
	* de que se haya logeado antes.
	*/
		if (isset($_COOKIE["usuario"])) {
			$usuario = $_COOKIE["usuario"];
			$sentencia = $mbd->prepare("select nombre from user where nombreUsuario like ?;");
			$sentencia->execute(array($usuario));
			// Se recoge el primer indice de la consulta que será el usuario.
			$nombreUsuario = $sentencia->fetch()[0];
		}else{
			// Si no tiene cookie se le redirige a la pagina de login
			// con un mensaje de error.
			$errores[] = "Inicia sesion para poder acceder al contenido.";
			$errores = serialize($errores);
			header("Location: Tarea7-LoginMalamente.php?err=$errores");	
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Contenido
 	</title>
 </head>
 <body>
 	<h1>Bienvenido <?=$nombreUsuario?>!!!</h1>
 	<br>
 	<form action="contenido.php" method="post">
 		<input type="submit" name="salir" value="Cerrar sesion">
 	</form>
 </body>
 </html>