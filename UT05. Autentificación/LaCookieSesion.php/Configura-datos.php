<?php 
	require_once("Funciones.php");
	$id; $data;

	if (count($_POST) !== 0 && count($_COOKIE) !== 0) {
		obten_o_crea_sesion($id, $data);

		if (isset($_POST["nombre"])) {
			$data["nombre"] = $_POST["nombre"];
	header("Location: CookieSesion.php");
		}
		if (isset($_POST["tipoMusica"])) {
			$data["musica"] = $_POST["tipoMusica"];
	header("Location: CookieSesion.php");
		}
		if (isset($_POST["enviaColores"])) {
			print_r($_POST["enviaColores"]);
			$data["colores"]["colorFuente"] = $_POST["colorFuente"];
			$data["colores"]["colorFondo"] = $_POST["colorFondo"];
		}
		guarda_sesion($id, $data);	
	}
	header("Location: CookieSesion.php");

 ?>
 <!--
https://stackoverflow.com/uestions/4554758/how-to-read-if-a-checkbox-is-checked-in-php

When using checkboxes as an array:

<input type="checkbox" name="food[]" value="Orange">
<input type="checkbox" name="food[]" value="Apple">

You should use in_array():

if(in_array('Orange', $_POST['food'])){
  echo 'Orange was checked!';
}

Remember to check the array is set first, such as:

if(isset($_POST['food']) && in_array(...
-->