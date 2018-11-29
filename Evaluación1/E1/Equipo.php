<?php 
		spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
	});

	/**
	 * 
	 */
	class Equipo
	{
		private $nombre;
		private $ciudad;
		function __construct($nombre, $ciudad)
		{
			$this->nombre = $nombre;
			
			$this->ciudad = $ciudad;
		}

		function getNombre(){
			return $this->nombre;
		}
		function getCiudad(){
			return $this->ciudad;

		}

	}

 ?>