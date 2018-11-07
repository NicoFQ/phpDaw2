<?php 
	include("./../resources/countries.php");
	include("./../resources/first_names.php");
	include("./../resources/last_names.php");
	include("./../config/config.php");

	$tamPaises = count($countries);
	$tamNombres = count($names);
	$tamApellidos = count($last_names);


	function generaUsuarios($nombre, $apellidos, $paises,$names, $last_names, $countries){
		
		$usuarios = [];
		$datosUsuario = [
			"nombre" => "",
			"apellido" => "",
			"pais" => "",
 		];

		$dosApellidos = "";

		for ($i=1; $i < NUM_USUARIOS; $i++) { 
			$datosUsuario["nombre"] = $names[mt_rand(0, $nombre-1)];
			$dosApellidos = $last_names[mt_rand(0, $apellidos-1)] . " " . $last_names[mt_rand(0, $apellidos-1)];
			$datosUsuario["apellido"] = $dosApellidos;
			$datosUsuario["pais"] = $countries[mt_rand(0, $paises-1)];
			$usuarios[] = $datosUsuario;
		}

		return $usuarios;
	}
	//print_r(generaUsuarios($tamNombres, $tamApellidos, $tamPaises, $names, $last_names, $countries));
	$arrArr = generaUsuarios($tamNombres, $tamApellidos, $tamPaises, $names, $last_names, $countries);
 ?>
