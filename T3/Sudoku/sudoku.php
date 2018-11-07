<?php 
	define("N_CASILLAS", 9);
	define("N_CASILLAS_GRUPO", 3);



	function sudokuPrint($var_sudoku){

		echo "<table>";
		$cuadrante = [];

			for ($x=0; $x < N_CASILLAS; $x++) { 
				echo "<tr>";
				for ($i=0; $i < N_CASILLAS; $i++) { 

					echo "<td>";
					echo $var_sudoku[$x][$i];
					echo "</td>";
				}
				echo "</tr>";
			}

		echo "</table>";

	}	


	function sudokuIni(&$varSudoku){

		for ($x=0; $x < N_CASILLAS; $x++) { 
			for ($i=0; $i < N_CASILLAS; $i++) { 
				$varSudoku[$x][$i] = "0";
			}
		}
		sudokuGenera($varSudoku);
		sudokuPrint($varSudoku);
	}


	function sudokuGenera(&$tabla){
		$ranFila = 0;
		$ranColum = 0;
		$ranNum = 0;
		for ($i=0; $i < 25; $i++) { 
			do{
				$ranFila = mt_rand(0,N_CASILLAS-1);
				$ranColum = mt_rand(0,N_CASILLAS-1);
				$ranNum =  mt_rand(1,N_CASILLAS);
				$esPosible = sudokuComprueba($tabla, $ranFila,$ranColum,$ranNum);
				
			}while (!$esPosible);
			echo "$i";
			sudokuEscribe($tabla,$ranFila,$ranColum,$ranNum);
			
		}

	}

	function sudokuEscribe(&$tabla, $x, $y, $n){
		$tabla[$x][$y] = $n;
	}

	function sudokuComprueba(array $tabla, $x, $y, $n){
		//echo "X=$x - Y=$y";
		$cuad = hayaCuadrante($x,$y);
		return compruebaFila($tabla, $x, $n) && compruebaColumna($tabla, $y, $n) && compruebaCuadrante($tabla, $cuad[0], $cuad[1], $n);

	}

	function compruebaFila($tabla, $x, $n){
		$esPosible = true;
		for ($y=0; $y < N_CASILLAS; $y++) { 
			if ($tabla[$x][$y] == $n) {
				$esPosible = false;
			}
		}
		return $esPosible;
	}

	function compruebaColumna($tabla, $y, $n){

		$esPosible = true;
		for ($x=0; $x < N_CASILLAS; $x++) { 
			if ($tabla[$x][$y] == $n) {
				$esPosible = false;
			}
		}
		return $esPosible;
	}

	// 2,8
	// 5,7
	function hayaCuadrante($x,$y){
		$fila = $x / N_CASILLAS_GRUPO; // 0,
		$columna = $y / N_CASILLAS_GRUPO; // 2
		// 0 - 6

		$cuadrante = [floor($fila)*N_CASILLAS_GRUPO, floor($columna)*N_CASILLAS_GRUPO];
		//echo "CUADRANTE: X = $cuadrante[0] - Y = $cuadrante[1]";
		return $cuadrante;
	}

	function compruebaCuadrante($tabla, $xx, $y, $n)
	{
		$esPosible = true;
		for ($x=$xx; $x < ($xx + N_CASILLAS_GRUPO) - 1; $x++) { 
			for ($i=$y; $i < ($y + N_CASILLAS_GRUPO) - 1; $i++) { 
				//echo "<br> comprobacion $x - $i <br>";
				if ($tabla[$x][$i] == $n) {
					$esPosible = false;
				}
			}
		}
		return $esPosible;
	}

/*
	function compruebaCuadrante(){
		return compruebaBloque($tablero, $sudokuIndiceX*N_CASILLAS, $sudokuIndiceY*N_CASILLAS);
	}

	function compruebaBloque($tablero, $indiceX, $indiceY){
		$lista = [];
		for ($i=$indiceX; $i < ($indiceX + N_CASILLAS); $i++) { 
			for ($j=$indiceY; $j < ($indiceY + N_CASILLAS); $j++) { 
				if ($tablero[$i][$j] != 0) {
					$lista[] = $tablero[$i][$j];
				} else {
					# code...
				}
				
			}

		}
	}
*/
	$sudoku = [[]];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		
 		td{
 			border: 1px solid black;
 			width: 30px;
 			height: 30px;
 			text-align: center;
 		}


 	</style>
 </head>
 <body>
 	<?php 
 		sudokuIni($sudoku);

		
 	 ?>
 </body>
 </html>