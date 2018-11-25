<?php 

	$tablero = [];
	function inicializaSopaLetras(&$tablero,$n,$m){
		for ($x=0; $x < $n; $x++) { 
				$tablero[] = [];
			for ($y=0; $y < $m; $y++) { 
				$tablero[$x][$y] = "&nbsp;".chr(mt_rand(65,90)). "&nbsp;";
			}
		}
	}

	inicializaSopaLetras($tablero, 10,10);

	function pintaTablero($tablero){
		?>
	<table>
		<?php foreach ($tablero as $fila): ?>
			<tr>
				
			<?php foreach ($fila as $celda): ?>
				<td><?= $celda ?></td>
			<?php endforeach ?>
			</tr>
		<?php endforeach ?>
	</table>
		<?php 
	}

	function colocaPalabraHorizontalAlreves(&$tablero, $palabra){
		$tamTableroCol = count($tablero[0]) -1;
		$tamTableroFil = count($tablero) -1;
		
		$arrPalabra = str_split($palabra);
		$arrPalabra = array_reverse($arrPalabra);
		$tamPalabra = count($arrPalabra);

		$limite = $tamTableroCol - $tamPalabra;
		if ($limite < 0) {
			echo "Palabra grande";
		}else{

			$randFila = mt_rand(0,$tamTableroFil);
			$randColu = mt_rand(0,$limite);
			
			for ($i=0; $i < $tamPalabra; $i++) { 
				$tablero[$randFila][$randColu + $i] = $arrPalabra[$i];
			}			
		}
	}
	
		function colocaPalabraHorizontal(&$tablero, $palabra){
		$tamTableroCol = count($tablero[0]) -1;
		$tamTableroFil = count($tablero) -1;
		
		$arrPalabra = str_split($palabra);
		//$arrPalabra = array_reverse($arrPalabra);
		$tamPalabra = count($arrPalabra);

		$limite = $tamTableroCol - $tamPalabra;
		if ($limite < 0) {
			echo "Palabra grande";
		}else{

			$randFila = mt_rand(0,$tamTableroFil);
			$randColu = mt_rand(0,$limite);
			
			for ($i=0; $i < $tamPalabra; $i++) { 
				$tablero[$randFila][$randColu + $i] = $arrPalabra[$i];
			}			
		}
	}
	

		function colocaPalabraVertical(&$tablero, $palabra){
		$tamTableroCol = count($tablero[0]) -1;
		$tamTableroFil = count($tablero) -1;
		
		$arrPalabra = str_split($palabra);

		//$arrPalabra = array_reverse($arrPalabra);
		$tamPalabra = count($arrPalabra);

		$limite = $tamTableroFil - $tamPalabra;

		if ($limite < 0) {
			echo "Palabra grande";
		}else{

			$randFila = mt_rand(0,$limite);
			$randColu = mt_rand(0,$tamTableroCol);
			
			for ($i=0; $i < $tamPalabra; $i++) { 
				$tablero[$randFila + $i][$randColu] = $arrPalabra[$i];

			}	
			echo "";		
		}
	}
		function colocaPalabraVerticalAlreves(&$tablero, $palabra){
		$tamTableroCol = count($tablero[0]) -1;
		$tamTableroFil = count($tablero) -1;
		
		$arrPalabra = str_split($palabra);

		$arrPalabra = array_reverse($arrPalabra);
		$tamPalabra = count($arrPalabra);

		$limite = $tamTableroFil - $tamPalabra;

		if ($limite < 0) {
			echo "Palabra grande";
		}else{

			$randFila = mt_rand(0,$limite);
			$randColu = mt_rand(0,$tamTableroCol);
			
			for ($i=0; $i < $tamPalabra; $i++) { 
				$tablero[$randFila + $i][$randColu] = $arrPalabra[$i];
			}	
			echo "";		
		}
	}
	function colocaPalabra(&$tablero, $palabra){

		switch (mt_rand(1,4)) {
			case 1:
				colocaPalabraHorizontal($tablero, $palabra);
				break;
			case 2:
				colocaPalabraHorizontalAlreves($tablero, $palabra);
				break;
			case 3:
				colocaPalabraVerticalAlreves($tablero, $palabra);
				break;
			case 4:
			colocaPalabraVertical($tablero, $palabra);
				break;
			default:
				# code...
				break;
		}

	}
	//colocaPalabraHorizontal($tablero, "Nico");
	//colocaPalabraHorizontalAlreves($tablero, "Esteban");
	colocaPalabra($tablero, "Sweet");
	pintaTablero($tablero);
 ?>
