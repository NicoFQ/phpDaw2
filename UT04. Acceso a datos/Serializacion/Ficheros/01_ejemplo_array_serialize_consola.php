<?php 

	$arr = [
	    "frutas"  => ["a" => "naranja", "b" => "plátano", "c" => "manzana"],
	    "números" => [1, 2, 3, 4, 5, 6],
	    "hoyos"   => ["primero", 5 => "segundo", "tercero"],
	];

	if (!isset($argv[1])) {
		echo "Hace falta un nombre de archivo...";
		die();
	}

	$ruta = "./data/"; 

	if (!file_exists($ruta)) {
		mkdir($ruta);
	}
	
	$archivo = $ruta . $argv[1];
	$manejador = fopen($archivo, 'w') or die('No se pudo abrir el fichero:  '.$archivo);

	$datos = serialize($arr);

	fwrite($manejador, $datos);

	fclose($manejador);

 ?>