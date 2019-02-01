<?php 
	include('Conexion.php');
	$token = "";
	$email = "";
	$sentencia = "";
	if (isset($_GET['token']) && isset($_GET['email'])) {
		$token = $_GET['token'];
		$email = $_GET['email'];
		$sentencia = $pdo->prepare("select * from tmp_usuario where token = ?  and email = ? and expira >= sysdate();");
		$sentencia->execute(array($token, $email));
		if ($sentencia->rowCount() === 1) {
			$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			print_r($datos);
			$sentencia = $pdo->prepare("insert into usuario(nombre, email, contrasena, direccion) values (?, ?, ?, ?);");
			$sentencia->execute(array($datos[0]['nombre'],$datos[0]['email'],$datos[0]['contrasena'],$datos[0]['direccion']));
			print_r($sentencia->errorInfo());

			$sentencia = $pdo->prepare('delete from tmp_usuario where token = ? and email = ?;');
			$sentencia->execute(array($token, $email));
			//header('Location: ./../public/index.php?activacion=ok');
			//die();
		}else{
			echo "ERROR: Activacion fallida.";
			echo "<br>";
			print_r($sentencia->errorInfo());	
		}
	}else{
		echo "No deberias estar aqui.";
	}
	function activaCuenta($con, $datos){
		$sentencia = $con->prepare();
	}

 ?>