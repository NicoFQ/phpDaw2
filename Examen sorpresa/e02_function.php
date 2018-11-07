<?php 
	function sumaNumeros($num1, $num2){
		$totalSuma = 0;
		if ($num1<$num2) {
			for ($i=$num1; $i <= $num2; $i++) { 
				$totalSuma += $i; 
			}
		} else {
			$totalSuma  = "Se ha producido un error.";
		}

		return $totalSuma;
	}
 ?>