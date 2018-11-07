<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>

<body>
	<?php 
	$arr = [1, 2, 3, "Hola", "k", "ase", [], NULL, ["W"], 2.3, 2.6];
	function cuentaTipos($array){
		$tamArray = count($array);
		$tipos = [];
		for ($i=0; $i < $tamArray; $i++) { 
			
			$tipos += [gettype($array[$i]) => 0];

		}
		$tamTipos = count($tipos);
		for ($i=0; $i < $tamTipos; $i++) { 
			for ($x=0; $x < $tamArray; $x++) { 
				if (key($tipos) == gettype($array[$x]) ) {
					$tipos[gettype($array[$x])]++;
				}
			}
			next($tipos);
		}

		return $tipos;
	}
	print_r(cuentaTipos($arr));
	echo "<br>";

	function clasificaTipos($array){
		$tamArray = count($array);
		$tipos = [];
		for ($i=0; $i < $tamArray; $i++) { 
			
			$tipos += [gettype($array[$i]) => []];

		}
		$tamTipos = count($tipos);
		for ($i=0; $i < $tamTipos; $i++) { 
			for ($x=0; $x < $tamArray; $x++) { 
				if (key($tipos) == gettype($array[$x]) ) {

					$tipos[gettype($array[$x])][] = $array[$x];
					
					// array_push($tipos[gettype($array[$x])], $array[$x]);

				}
			}
			next($tipos);
		}

		return $tipos;
	}
	print_r(clasificaTipos($arr));
 ?>
</body>
</html>
