<?php 	
	function insertaDatos(...$datos){
		$error = "";
		include("Conexion.php");
		$sentencia = $pdo->prepare("insert into tmp_usuario(nombre, email, contrasena, direccion, token, expira) 
		values (?, ?, ?, ?, ?, ?);");
		$token = generateToken();
		$datos[] = $token;
		//echo generaFecha("0","0","0","0");
		$datos[] = generaFecha(0,0,5,0);
		$sentencia->execute($datos);
		if ($sentencia->rowCount() === 1) {
			header("Location: ./../src/activar_cuenta.php?token=$token&email=$datos[1]");
			die();
		}elseif ($sentencia->rowCount() === 0 && 
				 $sentencia->errorInfo()[1] == "1062") {
			$error = "Este email ya esta en uso";
		}
		return $error;

		// print_r($sentencia->rowCount());
		// print_r($sentencia->errorInfo());	
	}
	
	function generateToken($length = 30)
	{
    	return bin2hex(random_bytes($length));
	}

	function generaFecha($dia=0, $horas=0, $min=0, $seg=0){
		$diaHoy = date("Y-m-d");
		$nuevafecha = strtotime ("+$dia day", strtotime($diaHoy));
		$nuevafecha = date ("Y-m-d", $nuevafecha); 
		$hora = new DateTime();
		$hora->modify('+' . $horas . ' hours');
		$hora->modify('+' . $min . ' minute');
		$hora->modify('+' . $seg . ' second');
 		return $nuevafecha . " " . $hora->format("H:i:s");
	}
 ?>