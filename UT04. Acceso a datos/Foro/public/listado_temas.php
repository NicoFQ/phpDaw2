<?php 

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
	<?php require("./../src/head.php") ?>
	<?php require("./../src/nav.php") ?>
	<?php $foro->listarTemas($orden); ?>

</body>
</html>