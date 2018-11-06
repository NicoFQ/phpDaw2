<?php 
	require("./src/EscribeHTML.php");
	require("./src/EscribeJSON.php");
	include("./test/testIn.php");
	include("./test/testOut.php");
	
	

	abstract class EstructuraConArray implements IEstructuraDeDatos
	{
		use EscribeHTML;
		use EscribeJSON;
		protected $datos = [];
		public function vaciar()
		{
			if (!$this->estaVacia()) {
				$this->datos = null;
				echo "Eliminando datos...";
			}
		}

		public function estaVacia()
		{
			$vacia = true;
			if (sizeof($this->datos) > 0) {
				echo "La estructura contiene datos.";
				$vacia = false;
			}

			return $vacia;
			
		}



		abstract function introduce($valor);
		abstract function sacar();


	}


	abstract class MeteConUnShift extends EstructuraConArray
	{
		public function introduce($valor)
		{
			array_unshift($this->datos, $valor);
		}
	}

	abstract class MeteConPush extends EstructuraConArray
	{
		public function introduce($valor)
		{
			array_push($this->datos, $valor);
		}
	}

	class SPila extends MeteConUnShift
	{

		public function sacar(){
			return array_shift($this->datos);
		}
	}


	class SCola extends MeteConUnShift
	{
		public function sacar(){
			return array_pop($this->datos);
		}
	}

	class PPila extends MeteConPush
	{
		public function sacar(){
			return array_pop($this->datos);
		}
	}


	class PCola extends MeteConPush
	{
		public function sacar(){
			
			return array_shift($this->datos);
		}
	}

	
	$sPila = new SPila();
	echo "<h4>Introduccion de datos a pila con array_unshift()</h4>";
	testIn($sPila);
	echo "<h4>Extraccion de datos a pila con array_shift()</h4>";
	testOut($sPila);
	echo "<br>";
	

	$sCola = new SCola();
	echo "<h4>Introduccion de datos a cola con array_unshift()</h4>";
	testIn($sCola);
	echo "<h4>Extraccion de datos a cola con array_shift()</h4>";
	testOut($sCola);
	echo "<br>";
	

	$pPila = new PPila();
	echo "<h4>Introduccion de datos a pila con push()</h4>";
	testIn($pPila);
	echo "<h4>Extraccion de datos a pila con pop()</h4>";
	testOut($pPila);
	echo "<br>";


	$pCola = new PCola();
	echo "<h4>Introduccion de datos a cola con push()</h4>";
	testIn($pCola);
	echo "<h4>Extraccion de datos a cola con array_shift()</h4>";
	testOut($pCola);
	echo "<br>";


	/*$sPila->vaciar();
	$sPila->printHTML();
	echo "<br>";
	echo "<br>";*/








	
 ?>