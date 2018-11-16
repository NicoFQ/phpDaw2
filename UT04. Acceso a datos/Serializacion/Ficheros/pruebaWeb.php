<?php 
	$ruta = "https://www.dia.es/compra-online/productos/charcuteria-y-quesos/c/WEB.002.000.00000";
	$gestor = fopen($ruta, "r");
	$datos = fread($gestor, 70000);
	echo "$datos";

 ?>