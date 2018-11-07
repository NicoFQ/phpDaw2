<?php 

	class Persona 
	{
		public $nombre;
		public $apellido1;
		public $apellido2;

		private const MAX_PREFIX_LENGTH = 5;
		private const FUNTIONS = [
			"lower" => "strtolower",
			"upper" => "strtoupper",
			"mixed" => "ucfirst",
			"objec" => "new Persona",
 		];
 		public function __construct($nom)
 		{
 			$this->nombre = $nom;
 		}
		public function __get($name)
		{
			//echo $name;
			// coger 5 primeros caracteres.
			$prefix = substr($name, 0,5);
			// Verificar si es lower, upper o mixed
			if (! isset(Persona::FUNTIONS[$prefix])) {
				echo "ERROR <br>";
				// TODO: Notice: Undefined property
			} else{
				//echo "Todo ok <br>";
				// Coger resto de cadena en min y verificar si es alguna propiedad.
				$property = substr($name, Persona::MAX_PREFIX_LENGTH);
				$property = strtolower($property);

				if (property_exists($this, $property)) {
					//  Si todo va bien tevolver propiedad
					//echo "Existe";
					return Persona::FUNTIONS[$prefix]($this->$property);
				} else {
					//echo "No Existe";
					// TODO: Notice: Undefined property
				}
				

			
			}

		}
		public function __call($name, $args)
		{
			echo $name . "<br>";
			print_r($args);
		}
	}

	$per = new Persona("Jorge");
	$per->nombre="Ñicolas";
	$per->apellido1="Flores";
	$per->propiedadNoExixte;
	echo "<br>";
	echo "$per->lowerNombre";
	echo "<br>";
	echo "$per->upperApellido1";
	echo "<br>";
	echo "$per->mixedNombre";
	echo "<br>";
	print_r($per->objecNombre);
	echo "<br>";

	//$per->metodoNoExixte();

 ?>