<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<?php 
	// 	EJERCICIO 1
		$cad = "Hola Mundo";
		$longitudCadena = strlen($cad);
		echo "<h1>$cad<h1>";
		for ($i=0; $i < $longitudCadena; $i++) { 
			$letra = substr($cad, $i,1);
			echo "<h4>$letra</h4>";
		}
	 	
	 ?>	

	 <?php
	 $cont = 0;
	  while (strpos($cad, 'a', $cont)) { 
	 ?>

	 	<h4> <?=$cad[$cont]?></h4>

	 <?php 
	 $cont++;
	} ?>	

	<?php 
		// Crea una pagina web que escriba span con numeros aleatorios
		// entre 0 y 1000 de distindos colores, el proceso parará cuando el 
		// numero acabe en 17 o sea primo. 
		//Debes programar con bucles la comprobacion de si es un numero primo.

		function esPrimo(numero){
			$esDivisiblePorOtroNumero = false;
			if ($numero % ) {
				
			}
		}

	 ?>

</body>
</html>