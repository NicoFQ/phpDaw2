<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		
		form{
			border: solid red 1px;
			width: 200px;
			margin: 20px;
			padding: 20px;
		}
		p:first-leter{

			font-size: 30px;

		}
	</style>
</head>
<body>

<?php 
	
	//include("tiposArray.php");

	$yo = [
	  "nombre" => "Jorge Dueñas Lerín",
	  "direccion" => "Calle falsa número 1234",
	  "telefono" => "91 123 45 67",
	  "poblacion" => "Madrid",
	  "edad" => 23,
	]
	?>

	<?php
	 	function format_form_user(array $user){
		$salida = "<form id='datos personales' action='post'>";
	
		foreach ($user as $key => $value) {
			if ($key == "poblacion") {
				$salida = $salida . "<p>" . ucfirst($key) . "</p>";
				$salida = $salida . "<select name='$key' form='format_form_user'>";
				$salida = $salida . "<option value='$value'>" .$value . "</option>";
				$salida = $salida . "</select>";
			} else {
			$salida = $salida . "<p>" . ucfirst($key) . "</p>";
			$salida = $salida . "<input name='$key' value='$value'></input>";
			}
			
		}

		$salida = $salida . "</form>";

		return $salida;
	}
	echo format_form_user($yo);
	/*
		imprime([1,[2,3], [[1],[3,4]]]);
	*/

 ?>
</body>
</html>