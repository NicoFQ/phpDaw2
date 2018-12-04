<?php 
require_once("Colores.php"); 

	$color = $colores["LightCyan"]; // Se establece un color predetermiado para la pagina.

	if (isset($_GET["color"])) {
		$color = trim($_GET["color"]);
		setcookie("color",$color, time()+60);
	}else{

		if (isset($_COOKIE["color"])) {
			echo "Se ha recuperado su fondo de pagina.";
			$color = $colores[$_COOKIE["color"]];
		}else{
			echo "No hay cookie.";
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