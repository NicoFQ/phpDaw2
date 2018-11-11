<?php 
	/*
	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});

    $bd = SingleConexion::getInstance()->conexion();
    $foro = new Foro($bd);
    $bd->exec("set character set utf8");
	*/
	require("./../src/conexion.php");
	
    $orden = 'fecha_publicacion';	
    if (isset($_GET["orderby"])) {
    	$orden = $_GET["orderby"];
    }
	//require("./../src/conexion.php"); 
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>
		ForoCode
	</title>
</head>
<body>
	<?php require("./../src/nav.php") ?>
	<!--
	<nav>
		<span>
			A que esperas... 
		</span>
		<a href="./crear_tema.php">
			¡Crea un tema!
		</a>
	</nav>
	-->


		<?php $foro->listarTemas($orden); ?>



</body>
</html>