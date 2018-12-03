<?php 

	setcookie("colorFondo", "silver");
	$colores = [
		"amarilo" => "yellow",
		"gris" => "silver",
		"rojo" => "tomato",
		"negro" => "black",
	];
	
	$color = "white";

	if (isset($_COOKIE["colorDeFondo"])) {
		$color = $_COOKIE["colorDeFondo"];
	}else{
		setcookie("fondo","amarillo");
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style type="text/css">

 	body{
 		background-color: <?='#'.$color ?>
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