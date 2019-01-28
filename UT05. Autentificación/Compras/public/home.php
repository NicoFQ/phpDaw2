<?php 
	include_once './../src/Login.php';
	$login = Login::getInstance();
	$nombre = "";
	$articulos = 0;
	if (isset($_SESSION['nombre'])) {
		$nombre = $_SESSION['nombre'];
		echo "me recuerdas por sesion";
		echo "<br>";
	}else {
		echo "no me recuerdas por sesion";
		echo "<br>";
		if(isset($_COOKIE['recuerdo_id']) && isset($_COOKIE['recuerdo_ik'])){
			echo "Hay cookies";
			echo "<br>";
			$meRecuerdas = $login->meRecuerdas($_COOKIE['recuerdo_id'], $_COOKIE['recuerdo_ik']);
			if($meRecuerdas === false){
				echo "no me recuerdas por cookie";
				echo "<br>";
				header("Location: login.php");
				die();	
			}else{
				$_SESSION['nombre'] = $meRecuerdas;
				$nombre = $meRecuerdas;
				echo "me recuerdas por cookie";
				echo "<br>";
			}
		}else{
			echo "No Hay cookies";
			echo "<br>";
			header("Location: login.php");
			die();
		}
	}
	if (isset($_COOKIE["articulos"])) {
		$articulos = $_COOKIE["articulos"];
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 	<h1>Bienvenido <?=$nombre?></h1>
 	<h3> <?= $articulos?> articulos en tu carrito</h3>
 	<a href="compras.php">Ir a comprar</a>
 	<hr>
 	<a href="./../src/cerrar_sesion.php">Cerrar sesion</a>
 </body>
 </html>