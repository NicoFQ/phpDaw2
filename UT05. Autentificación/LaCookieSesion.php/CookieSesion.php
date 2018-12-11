<?php 
	require_once("Funciones.php");

	$id;	
	$data;
	
	obten_o_crea_sesion($id, $data);
	//var_dump($id);
	//var_dump($data);
	
	$nombre = $data["nombre"];
	$musicas = "¡Aun no has seleccionado ningun tipo! ¿A que esperas?";	

	if (count($data["musica"]) !== 0) {
		$musicas = implode(",", $data["musica"]);
	}

	if (count($data["colores"]) !== 0) {
		$colorFondo = $data["colores"]["colorFondo"];
		$colorFuente = $data["colores"]["colorFuente"];
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		La cookie que quiere ser sesion
 	</title>
 	<style type="text/css">
 		body{
 			color: <?=$colorFuente ?>;
 			background-color:  <?=$colorFondo ?>;
 		}
 	</style>
 </head>
 <body>
 	<div align="center">
	<h1>Bienvenido <?=$nombre?></h1>
	<p>Puedes actualizar tu nombre <a href="configurar-nombre.html">aqui</a></p>
	</div>
	<h3 style="display: inline;">Los tipos de musica que mas te gustan son: </h3>
	<p style="display: inline;"><?=$musicas?></p>
	<br>
	<a href="configurar-musica.html">Cambiar mis preferencias musicales</a>
 </body>
 </html>
