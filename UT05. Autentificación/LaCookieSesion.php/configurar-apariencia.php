<?php 
	require_once("Colores.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Configuracion apariencia
	</title>
</head>
<body>

 	<form action="Configura-datos.php" method="post">

 		<div id="coloresFondo" style="width: 500px; display: inline-block;">
 			<h4>Colores de fondo</h4>
 			<?php foreach ($coloresFondo as $key => $value): ?>
 			<div style="background-color: <?=$key?>; display: inline-block; width: 100px; height: 50px">
 				<label><input type="radio" name="colorFondo" value="<?=$key?>"></label>	
 			</div>	
 			<?php endforeach ?>
 		</div>
 		
 		<div id="coloresFuente" style="width: 500px; display: inline-block;">
 		 	<h4>Colores de fuente</h4>
 			<?php foreach ($coloresFuente as $key => $value): ?>
 			<div style="background-color: <?=$key?>; display: inline-block; width: 100px; height: 50px">
 				<label><input type="radio" name="colorFuente" value="<?=$key?>"></label>	
 			</div>	
 			<?php endforeach ?>
 		</div>
 		<br>
 		<br>
 		<input type="submit" name="enviaColores" value="Establecer colores">
 		
 	</form>
</body>
</html>