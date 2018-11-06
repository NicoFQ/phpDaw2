<?php 
	/*
		Las funciones se pueden definir condicionalmente.
	*/
	$esVerdad = true;
	if ($esVerdad) {
		function hola()
		{
			echo "Hola!";
			
			function adios()
			{
				echo "blablabla";
			}
		}
	}
	adios();
 ?>