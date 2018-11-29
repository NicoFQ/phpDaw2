<?php 
	require("./../src/Usuario.php");
	$user = new Usuario();
	if (isset($_POST["enviar"])) {
		$datos = $_POST;
		$user->obtenerDatosFormulario($datos);
	}
	$user->generarFormulario();

?>