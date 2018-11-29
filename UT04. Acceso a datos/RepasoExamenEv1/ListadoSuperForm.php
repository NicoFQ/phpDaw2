<?php 

	$con = new PDO('mysql:host=localhost;
					dbname=proyecto_foro',
					 "admin_foro",
					  "1234");
	$sentencia = $con->prepare("select * from usuario;");
	$sentencia->execute();
	print_r($sentencia->errorInfo());
	$datos = $sentencia->fetchAll();
	foreach ($datos as $fila => $valorFila) {
		foreach ($valorFila as $colum => $valorCol) {
			if (is_string($colum)) {
				if ($colum == "aplicaciones") {
					echo $colum . ": ";
					$val = unserialize($valorCol);

					echo implode(" - ", $val);
				}else if ($colum == "marcas") {
					echo $colum . ": ";
					$val = unserialize($valorCol);

					echo implode(" - ", $val);
				}else{

					echo $colum . ": ";
					echo $valorCol;
				}
				echo "<br>";
			}
			
		}
			echo "<br>";
	}
	$con = null;
 ?>