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
</head>
<body>
	<?php ClasePadel::reconstruirDatos($con->recuperarDatos()) ?>
</body>
</html>