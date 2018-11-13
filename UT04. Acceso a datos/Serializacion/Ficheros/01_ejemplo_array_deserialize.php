<?php 

	$archivo = 'info.dat';
	
	$manejador = fopen($archivo, 'r');
	$datos = fread($manejador ,filesize($archivo));

	$archivoDeserializado  = unserialize($datos);
	
	$manejador = fopen($archivo, 'w') or die('No se ha podido abrir el archivo:  ' . $archivo);
	
	fwrite($manejador, print_r($archivoDeserializado));
	fclose($manejador);

 ?>