<?php 
	// Contar el numero de letras que tiene frutas.
	$cosas=[
		"frutas" => [
						"a" => "naranja",
						"b" => "plátano",
						"c" => "manzana",
					],
		"numeros" =>[1,2,3,4,5,6],
		"hoyos" => ["primero",
					5=>"segundo",
					"tercero"],
		 42 => "Esto es una cadena",

	];
	//mb_strlen
	//apt install php7.2mbstring




	echo "Suma todas las letras de cada item en frutas.";
	echo "<br>";



	function sumaLetras($acumulador , $elementoPorIteracion){
		echo "Acumulador -> $acumulador <br>";
		$acumulador += strlen($elementoPorIteracion);

		return $acumulador;
	};



	$cosas2 = $cosas["frutas"];
	$sumaFrutas = array_reduce($cosas["frutas"], "sumaLetras", 0);

	echo mb_strlen($sumaFrutas, "UTF-8");
	echo "<br>";echo "<br>";

// 

















	$yarra = ["uno", "dos", "tres", "cuatro", "cinco"];
	$yarran = [1,2,3,4,5,6,7,8,9];
	//echo print_r($cosas);
	echo strrev(substr($cosas["frutas"]["c"], 2));
	echo "<br>";
	echo str_replace("a", $cosas["frutas"]["b"],$cosas[42]);

	/*
		array_count_values 

		array_fill_keys 
		array_fill
		array_filter
		array_key_exists
		array_key_last
		array_reduce

	*/

		echo "<br>";
		echo "array_count_values(input)";
		echo "<br>";
		echo "Cuenta todos los valores de un array";
		echo print_r(array_count_values($yarra));
		echo "<br>";
		echo "<br>";

		
		echo "array_fill_keys(keys, value)";
		echo "<br>";
		echo "Llena un array con valores, especificando las keys";
		echo print_r(array_fill_keys([1,2,3,4,5,6], "value"));
		echo "<br>";
		echo "<br>";



		echo "each(array)";
		echo "<br>";
		echo "Devolver el par clave/valor actual de un array y avanzar el cursor del array.";
		echo print_r(each($yarra));
		echo "<br>";
		echo "<br>";
		

		echo "array_key_exists(key, array)";
		echo "<br>";
		echo "Verifica si el índice o clave dada existe en el array.";
		echo "<br>";
		if (array_key_exists(0, $yarra)) {
			echo "Existe";
		}else{
			echo "NO Existe";
		}
		echo "<br>";
		echo "<br>";

		/*


		PREGUNTAR: 

		echo "array_key_last(array)";
		echo "<br>";
		echo "Obtiene la clave de la ultima posicion del array.";
		echo "<br>";
		echo array_key_last($yarra);
		echo "<br>";
		echo "<br>";
		
		*/


		function par($clave){
			return (!($clave & 1));
		}
		
		echo "echo array_filter(array, function)";
		echo "<br>";
		echo "Filtra elementos de un array usando una función de devolución de llamada.";
		echo "<br>";
		echo print_r(array_filter($yarran, "par"));
		echo "<br>";
		echo "<br>";
















































		$pila =[];
		function restaUno($n){
			return $n-=1;
		}
		$arrayRestado = array_map("restaUno", $cosas["numeros"]);
		//echo print_r($arrayRestado, true);
		
		// Ejemplo Practicar.
		//$array_mezcla=array_map(function ($cosa1, $cosa2, $gusto){
		//	return "$cosa1, me gusta $cosa2";
		//}, $cosas["hoyos"],$cosas["frutas"]);
		//echo print_r($array_mezcla, true);


 ?>

 <?php for ($i=1; $i <= 10; $i++) { ?>
 	<h1>Hola <?= $i ?> </h1>
 <?php } ?>