<?php 

	function tiposElemento(&$array){
		$tipo = "";
		$cont = 0;
		$elevaEntero = 2;
		$amin = "abcdefghijklmnñopqrstuvwyz";
		$amay = strtoupper($amin);
		foreach ($array as $key => $value) {
			$tipo = gettype($value);

			if (is_integer($value)) {
				$array[$cont] = $value**$elevaEntero;
				
				$elevaEntero++;
			} elseif (is_float($value)) {
				$array[$cont] = sprintf("%g", $value);;

				if ($value[0] == "-") {
					$array[$cont] = substr($value, 1);
					echo "esNegativo";
				}
			}elseif (is_string($value)) {
				$tamCad = strlen($value);
				
				for ($i=0; $i < $tamCad; $i++) { 
					for ($x=0; $x < 26; $x++) { 

							//str_replace($amin[$x], $amay[$x], $value);
							str_replace($amay[$x], $amin[$x], $value);
					}
				}
			}
			$cont++;
		}
	}

 ?>