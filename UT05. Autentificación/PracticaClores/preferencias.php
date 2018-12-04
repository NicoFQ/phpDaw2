<?php 
require_once("Colores.php"); 
if (isset($_COOKIE["color"])) {
		
		echo "Si hay cookie";
	}else{
		echo "No hay cookie";
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>
		Elige tu color
	</title>
	<style type="text/css">
		<?php foreach ($colores as $color => $hexa) {?>		

			a{
				display: block;
				float: left;
				width: 200px;
				height: 100px;
				text-align: center;
				text-decoration: none;
				color: black;
				line-height: 6.5em;
				margin: 1px;
			}

			a<?="#".$color?>{
				background-color: <?=$hexa ?>;
			}

		<?php } ?>
	</style>
</head>

<body>

	<?php foreach ($colores as $color => $hexa) {?>
		
		<a id="<?=$color?>" href="info.php?color=<?=$color?>"><?=$color?></a>

	<?php } ?>


</body>
</html>
	
