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

	$n = 1;
	printf("Hola esto es %d texto",$n);
	
	$n = 34382;
	$u = -34382;
	$c = 65;
echo"<br>";
	printf("%%d=%d", $n);
echo"<br>";
	printf("Con la d y usando \$n sale %d",$n);
echo"<br>";
 	printf("Con la b y usando \$n sale %u",$n);
echo"<br>";
 	printf("Con la b y usando \$u sale %b",$u);
echo"<br>";
 	printf("Con la d y usando \$n sale %'f08d",$n);
echo"<br>";
 	printf("%-010d",17);
echo"<br>";
 	printf("%-'a10d WTF",17);
echo"<br>";
 	printf("%0${c}d WTF",17);
echo"<br>";

	echo "se ha borrado todo, ups";
?>
