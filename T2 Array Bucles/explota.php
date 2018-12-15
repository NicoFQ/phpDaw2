<?php
	$nombre="Andrés";
	echo $nombre[4];
	echo $nombre[20];	
	echo "hola amigo ${nombre}_mio";
	echo "<br>";
	echo ord($nombre[0]);
	$n = ord('A');
	$letra1 = chr($n++);
	$letra1 = chr($n--);
	$letra1 = chr(++$n);
	echo "se ha borrado todo, ups";
?>
