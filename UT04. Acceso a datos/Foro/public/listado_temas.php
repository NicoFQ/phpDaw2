<?php 

	require("./../src/conexion.php");
	
    $orden = 'fecha_publicacion';	
    if (isset($_GET["orderby"])) {
    	$orden = $_GET["orderby"];
    }
    if (!isset($_GET["pag"])) {
    	$pag = 0;
    }else{
    	$pag = $_GET["pag"];
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
	<?php $paginas = $foro->listarTemas($orden, $pag * 10, 5, $pag); ?>

	<footer>
		<?php for ($x=0; $x < $paginas; $x++) { ?>
			<a href="listado_temas.php?&pag=<?=$x+1?>&orderby=<?=$orden ?>"><?=$x+1 ?></a>
		<?php } ?>
	</footer>
	
</body>
</html>