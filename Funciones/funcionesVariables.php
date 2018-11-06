<?php function cuentaElementos(...$elemento){
	$contador = 0;
	foreach ($elemento as $key) {
		$contador++;
	}
	return $contador;
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Argumentos variables.
	</title>
</head>
<body>
	<?php 
		echo cuentaElementos(1,2,1,2,1,2,1,2,1,2) . "<br>";
		echo 2**4;
	 ?>
</body>
</html>