<?php 

		spl_autoload_register(function ($class) {
    	$classPath = "./../src/";
    	require("$classPath${class}.php");
	});
		$con = ConexionPadel::getInstance();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Clases</title>
	<link rel="stylesheet" type="text/css" href="./estiloTabla.css">
</head>
<body>
	<?php $con->recuperarDatos() ?>
</body>
</html>