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
		//echo "<br>Objeto destruido.ClaseBase<br>";
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

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "ACCESIBILIDAD";
echo "<br>";
class Accesibilidad{
	public $pu = "Public";
	protected $pro = "Protected";
	private $pri ="Private";

	public function print(){
		echo "$this->pu <br>";
		echo "$this->pro <br>";
		echo "$this->pri <br>";

	}
	public function funcPu()
	{
		echo "Public <br>";
	}
	protected function funcPro()
	{
		echo "Protected <br>";
	}
	private function funcPri()
	{
		echo "Private <br>";
	}
}
$acceso = new Accesibilidad();
echo "$acceso->pu";
//echo "$acceso->pro";
//echo "$acceso->pri";
$acceso->funcPu();
//$acceso->funcPro();
//$acceso->funcPri();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "ACCESIBILIDAD  FINAL";
echo "<br>";
	class AccesiblidadFinal extends Accesibilidad{
		public function print(){
			parent::print();
			echo "$this->pu";
			echo "$this->pro";
			//echo "$this->pri"; // Accesibilidad solo para esa clase.
		}
	}
	$accFinal = new AccesiblidadFinal();
	$accFinal->print();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "UNA CLASE CONSTANTE STATIC/CURRENT NO_POLIMORFISMO";
echo "<br>";



	class UnaClasePadre{

		const CONST_VALUE="Valor constante padre";

		public function imprimeConst(){
			echo "self::CONST_VALUE";
			echo "static::CONST_VALUE";
		}
	}



	class UnaClaseHija extends UnaClasePadre{

		public static $algoEstatico = "Var estatica hija";
		const CONST_VALUE="Valor constante padre REDEFINIDO";
		public static $count = 0;

		public function __construct(){
			self::$count++;
		}

		public function imprime(){
			echo "N Objetos" . self::$count;
			echo "constante es" . self::CONST_VALUE;
			$this->imprimeConst();

		}

	}

	echo UnaClasePadre::CONST_VALUE;
	
	$hija = new UnaClaseHija();
	$hija2 = new UnaClaseHija();
	$hija2->imprime();
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "SINGLE_TON";
	echo "<br>";

	class Unico{ // Configuracion, login, Ficheros, BBDD
		public $cosa;
		private static $instance;
		public static function getInstance(){
			if(!isset(self::$instance)){
				self::$instance = new Unico();
			}
			return self::$instance;
		}
	}
	$config1 = Unico::getInstance();
	$config2 = Unico::getInstance();
	$config3 = Unico::getInstance();
	$config4 = Unico::getInstance();
	$config1->cosa=42;
	echo "$config2->cosa";

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "ABSTRACCION";
	echo "<br>";

	abstract class Instrumento {

		private $tipo;
		
		public function setTipio($tipo){
			$this->tipo = $tipo;
		}
		abstract public function tocar();

	}

	class Saxofon extends Instrumento{

		public function tocar(){
			echo "Tocando el Saxofon";
		}
	}

	$saxo = new Saxofon();
	$saxo->tocar();



	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "INTERFACE";
	echo "<br>";


	interface Ordenable
	{
		public function estableceClave($k);
		public function obtieneClave($k);
		public function esMayor(Ordenable $o);
		public function esIgual(Ordenable $o);
		public function esMenor(Ordenable $o);
	}
	/*class Numero implements Ordenable
	{
		private $clave;

		public function estableceClave($k){
			$this->clave = $k;
		}
		public function obtieneClave($k){
			$this->clave = $k;
		}


	}*/

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "RASGOS";
	echo "<br>";

	trait DiceHola
	{
		public function hola()
		{
			echo "Hola mundo";
		}
	}

	class Simple
	{
		use DiceHola; // Implenta 

		private $var;

		public function otraCosa(){
			echo "otra Cosa";
		}
	}

	$rasgo = new Simple();
	$rasgo->hola();
	echo "<br>";
	$rasgo->otraCosa();


	trait Imprimible
	{
		public function imprime()
		{
			foreach (get_object_vars($this) as $key => $value) {
				echo "$key -> $value <br>";
			}
		}
	}

	class Persona
	{
		use Imprimible;

		public $nombre="Nickkk";
		public $apellido="FFFQQQ";
		public $edad="222222";
	}

	$yo = new Persona();
	//echo "$yo->Imprimible";
	$yo->imprime();

 ?>	