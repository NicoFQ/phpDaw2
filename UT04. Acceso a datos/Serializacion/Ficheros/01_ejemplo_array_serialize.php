<?php 

	//$arr = [1,2,3,4,5];

	//$arr = [1,"Hola",3,4,5];
	
	//$arr = ["hola", "mundo", "serializado"];
	

	$arr = [
	    "frutas"  => ["a" => "naranja", "b" => "plátano", "c" => "manzana"],
	    "números" => [1, 2, 3, 4, 5, 6],
	    "hoyos"   => ["primero", 5 => "segundo", "tercero"],
	];

	$archivo = 'info.dat';
	$manejador = fopen($archivo, 'w') or die('No se pudo abrir el fichero:  '.$archivo);

	$datos = serialize($arr);

	fwrite($manejador, $datos);

	fclose($manejador);

 ?>