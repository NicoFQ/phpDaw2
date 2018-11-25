<?php 
require("ZonaDeMadrid.php");

	$zona = new ZonaDeMadrid();
	if (isset($_POST["enviar"])) {
		$z = $_POST["zona"];
		$zona->obtenerDatosFormulario($z);

	}
		$zona->generarFormulario();

 ?>