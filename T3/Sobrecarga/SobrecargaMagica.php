<?php 
	trait ComoTabla
	{
		
		public function tableView($a="", $long=0)
		{
			
			if (is_array($a)) {
				for ($i=0; $i < ; $i++) { 
			
				}
			} else {

			}	
		}













		









		foreach ($variable as $key => $value) {
			echo "<tr>";
			if (is_array($value)) {
				for
			} else {
				echo "<td>";
				var_dump($value)
				echo "</td>";	
			}
			
			echo "</tr>";
		}
		echo "</table>";
		}
	}
	class Persona
	{
		public $nombre; 
		public $apellido1; 
		public $apellido2; 

		public function __get($atr)
		{
			$aux = "";
			if ($atr == "upperNombre") {
				$aux = strtoupper($this->nombre);
			} elseif ($atr == "lowerNombre") {
				$aux = strtolower($this->nombre);
			} elseif ($atr == "mixedApellido1") {
				$aux = ucfirst(strtolower($this->apellido1));
			}
			return $aux;
		}
		public function __call($name, $args)
		{
			if (sizeof($args)==1) {
			$this->nombre = $args[0];
			}
			if (sizeof($args)>1) {
			$this->apellido1 = $args[0];
			$this->apellido2 = $args[1];
			}
		}
	}
	$per = new Persona();

	$per->nombre = "Jorge";
	$per->apellido1 = "DUEÑAS";
	echo $per->upperNombre;
	echo "<br>";
	echo $per->lowerNombre;
	echo "<br>";
	echo $per->mixedApellido1;
	echo "<br>";
	print_r($per);
	echo "<br>";
	$per->estableceNombre("Nicolas");
	$per->estableceApellidos("Flores", "Quispe");
	echo "<br>";
	print_r($per);
	




/*
class foo
{
    function __get($n)
    {
        echo strtoupper($n);
    }
    function __call($m, $a)
    {
        print_r($m);
    }
}

$test = new foo;
$varname = 'invalid,variable+name';
$test->$varname;
echo "<br>";
$test->$varname();
*/

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table border=1>
 		<tr><td>1</td><td></td></tr>
 		<tr> 
 			<td>1</td>
 			<td>2</td>
 			<td>3</td>
 			<td>4</td>
 			<td>5</td>
 		</tr>
 	</table>
 </body>
 </html>