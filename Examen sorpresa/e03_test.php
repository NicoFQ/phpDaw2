<?php 
	include("e03_function.php");

	$ar1 = [];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar3 = ["cOMO eSTAS",-1,2,3,3.2,-3.2,-5,6];
	$ar4 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar5 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$ar2 = [1,2,3,3.2,-3.2,"Hola",5,6];
	$arGeneral = [
		$ar1,
		$ar2,
		$ar3,
		$ar4,
		$ar5,

	];
	
	for ($i=0; $i < 5; $i++) { 
		tiposElemento($arGeneral[$i]);
		 echo implode(" ",$arGeneral[$i]) . "<br>";
	}

 ?>