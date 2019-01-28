<?php 
	include_once './../src/Login.php';
	include_once './../src/Articulo.php';
	$login = Login::getInstance();
	$articulosBD = Articulo::getInstance();
	$nombre = "";
	$numArticulos = 0;
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
	if (isset($_COOKIE["ART"])) {
		$articulos = unserialize($_COOKIE["ART"]);
		$numArticulos = count($articulos);
		echo "->Array cookie[ART]";
		print_r($articulos);
	}
	if (isset($_POST['anadir'])) {
		if (isset($_POST["cantidad"]) && !empty($_POST["cantidad"])) {
			if (isset($_POST["id_articulo"])) {
				$id = $_POST["id_articulo"];
				$cantidad = $_POST["cantidad"];
				$articulosBD->addArticulos($id, $cantidad, $_COOKIE);
			}
			
		}

	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 	<h1>Bienvenido <?=$nombre?></h1>
 	<h3> <?=$numArticulos?> articulos en tu carrito</h3>
 	
 	<?php $articulosBD->obtenerArticulos(); ?>
 	<hr>
 	<a href="./../src/cerrar_sesion.php">Cerrar sesion</a>
 </body>
 </html>