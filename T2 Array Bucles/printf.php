<?php 
	$contenedor = "garaje";
	$contenido = "coches";
	$cuenta = 3;
	$format1 = 'Hay %$d %s en el %s';
	$format2 = 'El %$3s contiene %$1d %$2s';
	$format = $format2;
	printf($format, $cuenta $contenido $contenedor);
 ?>