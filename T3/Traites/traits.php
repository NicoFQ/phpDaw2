<?php 
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "PERSONA";
	echo "<br>";
	echo "<br>";

	trait Saluda
	{
		public function saluda()
		{
			if (isset($this->nombre)) {
				echo "Hola soy: $this->nombre <br>";
			}else{
				echo "Hola Mundo <br>";
			}
		}
	}

	trait SaludaNombre
	{
		public function saluda()
		{
			print_r(get_object_vars($this));
			if (array_key_exists("nombre", get_object_vars($this))) {
				if (isset($this->nombre)) {
					echo "Hola soy: $this->nombre <br>";
				}else{
					echo "Hola Anonimo <br>";
				}
			}else{
				echo "Hola mundo <br>";
			}
			
		}
	}

	trait Camina{
		public function camina(){
			echo "Estoy caminando";
		}
	}





	class Persona 
	{
		use SaludaNombre;
		//use Camina;
		public $nombre;

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}
	}
	class PersonaDos 
	{
		use SaludaNombre;
		use Camina;

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}
	}
	$persona1 = new Persona();
	$persona2 = new Persona();
	$persona3 = new PersonaDos();
	$persona1->setNombre("Nick");
	$persona1->saluda();
	$persona2->saluda();
	$persona3->saluda();

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "PERRO";
	echo "<br>";
	echo "<br>";
	


	trait TieneNombre
	{
		private $nombre;

		public function estableceNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		public function diNombre()
		{
			echo "$this->nombre";
		}
	}

	class Perro
	{
		use TieneNombre;
		private $raza;

	}

	$perro = new Perro();
	$perro->estableceNombre("Tobby");
	$perro->diNombre();

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "FORMATEAR";
	echo "<br>";
	echo "<br>";
	
	trait Formatear
	{
		public function comoArray()
		{
			return get_object_vars($this);

		}

		public function comoJSON()
		{
			return json_encode($this);
		}
	}


	class PersonaFormato
	{
		use Formatear;
		public $nombre="Nico";
		public $apellidoUno="F";
		public $apellidoDos="Q";
		public $ciudad="Madrid";
		public $cp=28005;

	}

	$personaFormat = new PersonaFormato();

	print_r($personaFormat->comoArray());
	echo $personaFormat->comoJSON();
 ?>