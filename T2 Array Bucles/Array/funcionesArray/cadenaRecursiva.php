<?php 

	$cadena = "Hola comom estas?";

	function revertirCadena(string $cad){

		$tamCad = strlen($cad);
		$reverse = "";
		for ($i=$tamCad; $i > 0; $i--) { 
			$reverse = $reverse . $cad[$i-1];
		}
		return $reverse;
	}

	function stringReverse(string $cad, int $tam=0)
	{
		


	}


	//echo revertirCadena($cadena);
	//echo stringReverse($cadena);
	echo split("", $cadena);
 ?>