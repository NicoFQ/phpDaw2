<?php
include("Conexion.php");

	if (count($_COOKIE) > 0) {
		if (isset($_COOKIE['recuerdame_id']) && isset($_COOKIE['recuerdame_ik'])) {
			
		if(estadoCookie($_COOKIE['recuerdame_id']) && estadoCookie($_COOKIE['recuerdame_ik'])){
			$id = $_COOKIE['recuerdame_id'];
			$ik = $_COOKIE['recuerdame_ik'];
			$sentencia = $pdo->prepare("select * from usuario where 
			id = ? and recuerdame = ?;");
			$sentencia->execute(array($id, $ik));
			$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			if ($sentencia->rowCount() === 0) {
				header('Location: ./../public/index.php');
				die();
			}else if($sentencia->rowCount() === 1){
				$_SESSION['usuario'] = $datos[0]['nombre'];
				
				//header('Location: ./../public/home.php');
				//die();
			}		
		}
		}
	}


	function inicia_sesion($user, $contrasena, $recuerdame=false){
		include("Conexion.php");
		$errores = [];
		$sentencia = $pdo->prepare("select * from usuario where 
		(nombre = ? or email = ?) and contrasena = ?;");
		$sentencia->execute(array($user, $user, $contrasena));
		$datos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		//print_r($sentencia->errorInfo());
		//print_r($sentencia->fetchAll());
		//print_r($sentencia->rowCount());
		if ($sentencia->rowCount() === 0) {
			$sentencia = $pdo->prepare("select * from tmp_usuario where 
			(nombre = ? or email = ?) and contrasena = ?;");
			$sentencia->execute(array($user, $user, $contrasena));
			if ($sentencia->rowCount() === 0) {
				$errores[] = "Usuario o constraseña incorrecto.";
			}else{
				$errores[] = "Es necesario activar tu cuenta.";
			}
		}else if($sentencia->rowCount() === 1){
			if ($recuerdame) {
				var_dump($datos[0]['id']);

				$aux = recuerdame($datos[0]['id']);	
			}
			session_start();
			$_SESSION['usuario'] = $datos[0]['nombre'];
			header('Location: ./../public/home.php');
			die();
		}
		return $errores;
	}
	function recuerdame($id){
		var_dump($id);
		include("Conexion.php");
		$ramdomCookie = generateToken();
		$sentencia = $pdo->prepare("update usuario set recuerdame = ? where id= ?;");
		$sentencia->execute(array($ramdomCookie, $id));
		print_r($sentencia->errorInfo());
		setcookie("recuerdame_ik", $ramdomCookie, time()+300, "/");
		setcookie("recuerdame_id", $id . "", time()+300, "/");
		return "";
	}

	function generateToken($length = 30)
	{
    	return bin2hex(random_bytes($length));
	}

	function estadoCookie($cookie){
		$cookieValida = false;
		if (isset($cookie) && !empty($cookie)) {
			$cookieValida = true;
		}
		return $cookieValida;
	}

?>