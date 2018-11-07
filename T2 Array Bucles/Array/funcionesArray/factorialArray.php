<?php 

	/*
		[15 min]
Crea una función que devuelva el factorial de todos los números contenidos en
un array pasado como parámetro. En caso de que algún elemento no sea un entero
el array devuelto contendrá el valor 0
DEBES USAR array_map y una función auxiliar.
	*/
$array = [1,2,3,4,5,"trr",[],10];

function factorialArray($valor)
{
	if ($valor == 0 && is_numeric($valor)) {
		return 1;
	}
	elseif (!is_numeric($valor)){
		return 0;
	}
		else{
		return $valor * factorialArray($valor-1);
	}
	
}
//echo factorialArray(3);

//print_r(array_map("factorialArray", $array));
echo implode("-", array_map("factorialArray", $array));
$r = "hola";
if (is_null($r[4])) {
	echo "es nuill";
} else {
	echo "no lo es";
}

echo $r[4];
 ?>
