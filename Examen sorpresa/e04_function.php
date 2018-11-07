<?php 
	function cambiaValores(&$valor1, &$valor2){
		$aux1 = $valor1;
		$aux2 = $valor2;
		$valor1 = $aux2;
		$valor2 = $aux1;
	}
 ?>