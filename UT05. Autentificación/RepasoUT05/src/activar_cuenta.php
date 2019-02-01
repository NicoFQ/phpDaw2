<?php 
	include('Conexion.php');
	$token = "";
	$email = "";
	if (isset($_GET['token']) && isset($_GET['email'])) {
		$token = $_GET['token'];
		$email = $_GET['email'];
		$sentencia = $pdo->prepare("select * from tmp_usuario where token = ? and email = ?;");
		$sentencia->execute(array($token, $email));
		if ($sentencia->rowCount() === 1) {
			echo "<a href='./activacion.php?token=$token&email=$email'>ACTIVAR</a>";
		}else{
			echo "ERROR: Sentencia fallida";
			echo "<br>";
			print_r($sentencia->errorInfo());	
		}
	}else{
		echo "No deberias estar aqui.";
	}

 ?>