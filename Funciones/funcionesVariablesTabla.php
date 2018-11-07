<?php
	function creaTr(...$columna){
		$td = "";
		echo "<table>";
		foreach ($columna as $key => $value) {<
			echo "<tr> gettype($key)"
		}
		echo "<table>";
		return null;
	}
 function cuentaElementos(...$elemento){

	$contador = 0;

	foreach ($elemento as $key => $valor) {

		$contador++;
	
	}
	return $contador;
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Argumentos variables.
	</title>
</head>
<body>
	<?php 
	$cuenta = [1,2,3,4];
	$cuenta1 = [1,2,3,4];
	$cuenta2 = [1,2,3,4];
	$cuenta3 = [1,2,3,4];
		echo cuentaElementos();

	 ?>
</body>
</html>
function primo($num)

{

    $cont=0;

    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido

    for($i=2;$i<=$num;$i++)

    {

        if($num%$i==0)

        {

            # Si se puede dividir por algun numero mas de una vez, no es primo

            if(++$cont>1)

                return false;

        }

    }

    return true;

}

?>