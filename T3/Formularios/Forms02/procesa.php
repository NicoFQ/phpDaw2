<?php 
	$red = false;
	if (count($_GET) == 0 ) {
		$red = true;
	} else {
		if (empty($_GET["Campo1"])) {
			echo  "ERROR: Variable vacia";
			$red = true;
		} else {
			echo  "<table border='1'>";
	      	echo "<tr><th>Variable</th><th>Valor</th></tr>";

		    foreach($_GET as $key => $val){
		      echo "<tr><td>$key</td><td>$val</td></tr>";
		    }

			echo  "</table>";
		}

	}
	/*
		Redirect desde pagina mala.
	*/
	// Form no enviado
	// Form con dato
	// form sin dato
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<?php 
 		if ($red) {
 			echo "<meta http-equiv='refresh' content='2;form.php?&error=true'>";
 		}
 	 ?>
 	
 </head>
 <body>
 	<?php 
 		if ($red) {
 		echo "Redirigiendo...";
 		}
 	 ?>
 </body>
 </html>