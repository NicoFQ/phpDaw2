<?php 

	$ruta = "./data/"; 
	if (!isset($argv[1])) {
		echo "Hace falta un nombre de archivo...";
		die();
	}
	if (!file_exists($ruta)) {
		mkdir($ruta);
	}

	$archivo = $ruta . $argv[1];
	
	$manejador = fopen($archivo, 'r');
	$datos = fread($manejador ,filesize($archivo));

	$archivoDeserializado  = unserialize($datos);

	var_dump($archivoDeserializado);
	fclose($manejador);

	

 ?>w