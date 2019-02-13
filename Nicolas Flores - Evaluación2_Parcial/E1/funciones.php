<?php 

	function calculaSiguiente(array $numeros, $q = false){
	print_r($numeros);
    $numVars =  count($numeros);
    if ($q) {
    	$numVars = $numVars - 1;
    }
    //echo $numVars;
    $nuevoNumero = 0;
    $anterior = $numVars -2;
    $ultimo = $numVars-1;
    $aux1 = 0;
    $aux2 = 0;
		$siguiente = null;
		for ($i=0; $i < $numVars; $i++) {
			$x = $i+1;
			$var = "var". $x;
			if ($i === $anterior) {
				$aux1 = $numeros[$var];
			}
			if ($i === $ultimo) {
				$aux2 = $numeros[$var];
			}
		} 
		$aux3 = intval($aux1) + intval($aux2);
		echo "<br>";
		echo "<br>";
		echo $aux1;
		echo $aux2;
		echo "<br>";
		//var_dump($aux3);
		return $aux3;
	}

	function establecerCookie(string $nombre, string $valor){
		setcookie($nombre, $valor, time()+99999);
	}
 ?>