<?php 
	
	include("tiposArray.php");

	$yo = [
	  "nombre" => "Jorge Dueñas Lerín",
	  "direccion" => "Calle falsa número 1234",
	  "telefono" => "91 123 45 67",
	  "poblacion" => "Madrid",
	  "edad" => 23,
	]
	
	function format_form_user($user){
		$datos = clasificaTipos($user);
	}

	/*
		imprime([1,[2,3], [[1],[3,4]]]);
	*/
 ?>