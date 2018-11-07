<!DOCTYPE html>
<html>
<head>
	<title>
		e2.11.php
	</title>
</head>
<body>
	<?php 
	echo "<center>"
		$tamPiramide = 10; // Define el tamaño de la piramide.

		for ($i=0; $i < $tamPiramide; $i++) { 
			for ($x=0; $x < $i+1; $x++) { 
				echo "*";
			}
			echo "<br>";
		}
		echo "</center>"
	 ?>
</body>
</html>