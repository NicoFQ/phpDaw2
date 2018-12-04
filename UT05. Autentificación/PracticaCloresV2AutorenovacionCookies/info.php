<?php 
require_once("Colores.php"); 

	$color = $colores["LightCyan"]; // Se establece un color predetermiado para la pagina.
	//echo date('Y-m-d');
	//echo date('Y-m-d');

	//$expira = 60*60*24*7; // 7 dias.
	$expira = 20; // 1 minuto
	$ahoraMismo = time();

	if (isset($_GET["color"])) {
		$color = trim($_GET["color"]);
		setcookie("color",$color, $ahoraMismo+$expira);
		setcookie("ultimaSesion" , $ahoraMismo, $ahoraMismo + $expira);
		header("Location: info.php");
	}else{
		//print_r($_COOKIE);
		if (isset($_COOKIE["color"]) && isset($_COOKIE["ultimaSesion"])) {
			
			$color = $colores[$_COOKIE["color"]];
			echo "Se ha recuperado su fondo de pagina.";

			setcookie("ultimaSesion" , $ahoraMismo , $ahoraMismo + $expira);
			setcookie("color",$_COOKIE["color"], $ahoraMismo + $expira);
			
			//echo "Ultimo inicio de sesion hace: " . (($ahoraMismo/60)/60)  -  (($_COOKIE["ultimaSesion"]/60)/60) . "minuto/s";

		}else{
			echo "Fallo de cookies ";
		}		
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style type="text/css">

 	body{
 		background-color: <?=$color ?>
 	}

 </style>
 <body>
 	<p>
 		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 	</p>
 </body>
 </html>