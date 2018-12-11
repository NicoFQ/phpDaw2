<?php 
	require_once("Funciones.php");

	$id; $data;
	
	obten_o_crea_sesion($id, $data);
	
	$nombre = $data["nombre"];
	$musicas = "¡Aun no has seleccionado ningun tipo! ¿A que esperas?";	

	$colorFondo = $data["colores"]["colorFondo"];
	$colorFuente = $data["colores"]["colorFuente"];
	
	$musicas = implode(",", $data["musica"]);
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
 			background-color: <?=$colorFondo?>;
 		}
 		a{
 			text-decoration: none;
 		}
 	</style>
 </head>
 <body>
 	<div align="center">
	<h1>Bienvenido <?=$nombre?></h1>
	<p>Puedes actualizar tu nombre <a href="configurar-nombre.php">aqui</a></p>
	</div>
	<h3 style="display: inline;">Los tipos de musica que mas te gustan son: </h3>
	<p style="display: inline;"><?=$musicas?></p>
	<br>
	<a href="configurar-musica.php">Cambiar mis preferencias musicales</a>
	<br>
	<br>
	<br>
	<br>
	<div style="text-align: center;">
		<a href="configurar-apariencia.php">Cambia el aspecto de la pagina</a>
	</div>
	
 </body>
 </html>
