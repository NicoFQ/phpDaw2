<?php 

	class MiClase 
	{
		public $nombre = "Andres";
		private $edad = 23;
		public function imprime()
		{
			echo $this->nombre . "<br>";
			echo $this->edad ." <br>";
		}
	}
	$o1 = new MiClase();
	$o1 -> imprime();
	echo $o1 -> nombre;
	//echo $o1 -> edad;

	$arr1 = [1];
	$arr2 = $arr1;
	$o1 = new MiClase();
	$o2 = $o1;
	$arr2 [0] = 42;
	$o2 -> nombre = "Jorge";

	//echo "$arr1[0] $o1 -> nombre";

	class LoMismo
	{
		public $otraCosa;
		public $cosa = "propiedad";
		public function cosa()
		{
			return "metodo";

		}

	}
	$otro = new LoMismo();
	echo $otro->cosa . " " . $otro-> cosa();
	echo "<br>";
	$otro -> cosa = function(){return "funcion anonima OTRA.";};
	$otro -> otraCosa = function(){return "funcion anonima OTRA COSA.";};
	echo ($otro -> cosa)();
	echo "<br>";
	echo ($otro -> otraCosa)();

	class ConConstate 
	{
		const MICONSTANTE = 42;

		function muestra(){
	//		echo sefl::MICONSTANTE;
		}

	}
	$cons = new ConConstate();
	$cons -> muestra() . "<br>";

	echo $cons::MICONSTANTE;
	echo ConConstate::MICONSTANTE;

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "HERENCIA";

	class Coche 
	{
		public $modelo;
		public $carga;
		public $matricula;

		function mostrarInfo()
		{
			echo "$this->modelo  $this->carga Kg";
		}
		final function imprimeMatricula()
		{
			echo "$this -> matricula";
		}
	}
	class CocheRemolque extends Coche{
		public $cargaRemolque;
		public function mostrarInfo(){

			echo "$this->modelo $this->carga Kg $this->cargaRemolque Kg en remolque.";
			parent::mostrarInfo();
			echo "<br>";
			echo "$this->cargaRemolque";
		}
	}
	$coche = new Coche();
	$coche -> modelo = "Ferrari";
	$coche -> carga = 1000;
	$coche -> matricula = "000 FFF";
	$coche -> mostrarInfo();

	$cocheRemolque = new CocheRemolque();
	$cocheRemolque -> modelo = "Todoterreno";
	$cocheRemolque -> carga = "10000";
	$cocheRemolque -> matricula = "123456";
	$cocheRemolque -> cargaRemolque = "111111";
	$cocheRemolque -> mostrarInfo();

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "CONSTRUCTORES/DESTRUCTORES";
	echo "<br>";
	echo "<br>";

class ClaseBase
{	
	public $cosa = "defecto";

	function __construct()
	{
		echo "<br>Objeto creado.ClaseBase<br>";
	}

	function __destruct()
	{
		echo "<br>Objeto destruido.ClaseBase<br>";
	}
}

function primeraVersion(){
	echo "PRIMERA<br>";
$ob1 = new ClaseBase();
	
echo "Despues de la creacion";
echo"<br>";
echo"<br>";
echo"<br>";
}
//----------------------------------

function segundaVersion(){
	echo "<br>SEGUNDA <br>";
	$ob2 = new ClaseBase();
	echo "<br>";
	$ob2 = null;
	echo "<br>";
	echo "Despues de la creacion";

	echo"<br>";
}

function terceraVersion(){
	echo "TERCERA<br>";
$ob3 = new ClaseBase();
$ob4 = $ob3;

$o3 = null;
	echo "<br>";
echo "Despues de la creacion";

echo"<br>";
}
primeraVersion();
segundaVersion();
terceraVersion();

echo "<br>";
echo "<br>";
echo "<br>";
echo "DESTRUCCION DE OBJETOS";
$clase1 = new ClaseBase();
$clase1->cosa = "Un string";
$clase2 = new ClaseBase();
$clase1 = $clase2;
echo "$clase1->cosa";


// 
class SubClass extends ClaseBase
{
	function __construct()
	{
		parent::__construct();
		echo "Constructor SubClase";
	}
}

class OtraSubClass extends ClaseBase
{
	function __construct()
	{
		parent::__construct();
		echo "Constructor SubClase";
	}
}
	

class SubSubClass extends OtraSubClass
{
	function __destruct()
	{
		parent::__construct();
		echo "Destruccion propia de SubSubClass";
	}
}

 ?>	