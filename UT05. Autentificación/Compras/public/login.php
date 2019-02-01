<?php
require_once './../src/Login.php';
$login = Login::getInstance();
$errores = [];
$usuario = "";
$contrasena = "";
$recuerdame = false;
if(isset($_POST['enviar'])){
	
	$recuerdame = (isset($_POST["recuerdame"]) && !empty($_POST["recuerdame"])) ? true : false ;
	
	if (isset($_POST["usuario"]) && !empty($_POST["usuario"])) {
		$usuario = $_POST["usuario"];
	}else{
		$errores[] = "Usuario vacio";
	}

	if (isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) {
		$contrasena = $_POST["contrasena"];
	}else{
		$errores[] = "Contraseña vacia";
	}

	if (count($errores) === 0) {
		$usuarioOk = $login->login_usuarios($usuario, $contrasena, $recuerdame);
		if($usuarioOk){
			header("Location: home.php");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicia Sesion</title>
</head>
<body>

 <form class="form" action="login.php" method="post">
 
 <label>Usuario</label>
 <input type="text" name="usuario" value="<?=$usuario ?>"/>
 <br>
 <label>Contraseña</label>
 <input type="password" name="contrasena" />
 <br>
 <label>Recuerdame </label>
 <input type="checkbox" name="recuerdame" value="recuerdame" />
 
 <input type="submit" name="enviar" value="enviar" />
</form>
<hr>
 <?php foreach ($errores as $error => $value): ?>
 	<?=$value?>
 	<br>
 <?php endforeach ?>
</body>
</html>