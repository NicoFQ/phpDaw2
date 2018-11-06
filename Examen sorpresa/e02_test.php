<?php 
include("e02_function.php");
	$numeroElegido1=0;
	$numeroElegido2=0;
	for ($i=0; $i < 10; $i++) { 

		$numeroElegido1=mt_rand(0,20);
		$numeroElegido2=mt_rand(0,20);
	
		echo $numeroElegido1 . " - " . $numeroElegido2 . "<br>";
		echo sumaNumeros($numeroElegido1,$numeroElegido2) . "<br>";

	}

 ?>